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

        $response = Mail::to('email@example.com')->send(new TestMail($data));

        dd($response);
    }
}
