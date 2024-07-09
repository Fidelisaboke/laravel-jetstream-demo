<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeMailController extends Controller
{
    public function index()
    {

        $response = Mail::to(env('MAIL_TO_ADDRESS'))->send(new WelcomeMail());

        if ($response) {
            return response()->json([
                'message' => 'Mail sent successfully',
            ]);
        } else {
            return response()->json([
                'message' => 'Mail not sent',
            ]);
        }
    }
}
