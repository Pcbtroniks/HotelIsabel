<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    const EMAIL = 'reservaciones@hotelisabel.com';

    public function sendContactEmail()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to(self::EMAIL)->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Mensaje enviado correctamente');
    }
}
