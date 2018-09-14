<?php

namespace App\Http\Controllers;

use App\Activity;

use Carbon\Carbon;

use Jenssegers\Date\Date;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function home() {
        $date = Carbon::today()->format('Y-m-d');
        return redirect()->action('HomeController@index', compact('date'));
    }

    public function index($date) {
        $date = new Date(Carbon::parse($date));
        $activities = Activity::whereDate('created_at', $date)->get();
        return view('home', compact('activities'), compact('date'));
    }
}