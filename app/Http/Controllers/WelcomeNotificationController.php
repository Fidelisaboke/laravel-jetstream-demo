<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class WelcomeNotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        Notification::send($user, new WelcomeNotification($user));
        return redirect()->back();
    }
}
