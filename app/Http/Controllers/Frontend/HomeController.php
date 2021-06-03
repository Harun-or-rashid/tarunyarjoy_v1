<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(4)->get();
        $topDonors = \App\Models\User::role('Donor')->where('donation', '!=', '0')->orderBy('donation', 'DESC')->take(4)->get();
        return view('frontend.index', [
            'events' => $events,
            'topDonors' => $topDonors,
        ]);
    }
}
