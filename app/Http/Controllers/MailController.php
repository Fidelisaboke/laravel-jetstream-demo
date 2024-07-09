<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Fidel Isaboke',
            'title' => 'Testing out Gmail SMTP',
            'message' => 'This is a test mail from Laravel 11.'
        ];

        $response = Mail::to(env('MAIL_TO_ADDRESS'))->send(new TestMail($data));

        if ($response) {
            return response()->json([
                'message' => 'Mail sent successfully',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'message' => 'Mail not sent',
                'data' => $data
            ]);
        }
    }
}
