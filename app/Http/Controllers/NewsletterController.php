<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Exception;
use App\Service\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        {
            request()->validate(['email' => 'required|email']);

            try {
                $newsletter->subscribe(request('email'));
            } catch (Exception $e) {
                throw ValidationException::withMessages([
                    'email' => 'Dit email adres kan niet worden toegevoegd aan onze lijst.'
                ]);
            }

            return redirect('/')
                ->with('success', 'You are now signed up for our newsletter!');
        }
    }
}
