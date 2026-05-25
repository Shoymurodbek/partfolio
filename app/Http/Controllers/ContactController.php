<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $message =
            "📩 Yangi murojaat\n\n" .
            "👤 Ism: {$request->name}\n" .
            "📧 Email: {$request->email}\n" .
            "📝 Mavzu: {$request->subject}\n" .
            "💬 Xabar:\n{$request->message}";

        Http::post(
            "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage",
            [
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => $message,
            ]
        );

        return back()->with('success', 'Xabaringiz yuborildi!');
    }
}
