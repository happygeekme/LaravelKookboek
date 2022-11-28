<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use Illuminate\Validation\ValidationException;
use Exception;
use App\Models\Mailinglist;
use Illuminate\Support\Facades\Mail;


class MailinglistController extends Controller
{
    public function subscribe()
    {
        request()->validate(['email' => 'required|email']);

        try {
            Mailinglist::create([
                'email' => request('email')
            ]);

        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Dit email adres kan niet worden toegevoegd aan onze lijst.'
            ]);
        }

        $this->sendEmail(request('email'));

        return redirect('/')
            ->with('success', 'Je bent nu aangemeld voor onze nieuwsbrief!');

    }

    public function sendEmail($email)
    {
        Mail::to($email)->send(new Newsletter());
    }


}
