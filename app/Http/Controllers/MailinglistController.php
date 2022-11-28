<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Exception;
use App\Models\Mailinglist;

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

        return redirect('/')
            ->with('success', 'Je bent nu aangemeld voor onze nieuwsbrief!');
    }

}
