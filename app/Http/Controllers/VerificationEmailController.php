<?php

namespace App\Http\Controllers;


use App\Models\Contact;

class VerificationEmailController extends Controller
{
    public function __invoke(string $email)
    {
        $contact = Contact::where('email', $email)->first();
        if ($contact) {
            $contact->email_verified_at = now();
            $contact->save();
            session()->flash('success', 'Votre Adresse E-mail a bien été vérifier');
        }
        return redirect()->route('welcome');
    }
}