<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\GoogleCalendar\Event;

class GCalendar extends Controller
{
    public function show() {
        $calendar = Event::get();
        return view('calendar',[
            'calData' => $calendar
        ]);
    }
}
