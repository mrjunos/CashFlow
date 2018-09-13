<?php

namespace App\Http\Controllers;

use App\Activity;

use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $activities = Activity::all();
        $date = Carbon::now();
        $dateNext = Carbon::now()->addDay(1);
        $dateLast = Carbon::now()->addDay(-1);
        return view('home', [
            'activities' => $activities,
            'date' => $date,
            'dateNext' => $dateNext,
            'dateLast' => $dateLast,
        ]);
    }
}