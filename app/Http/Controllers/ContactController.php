<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Kirim email (opsional, jika sudah setup mail)
        // Mail::to('admin@domainmu.com')->send(new ContactMail($request->all()));

        // Untuk sekarang, cukup return success message
        return back()->with('success', 'Pesan kamu sudah terkirim! Terima kasih telah menghubungi saya.');
    }
}
