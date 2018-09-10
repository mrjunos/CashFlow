<?php

namespace App\Http\Controllers;

use App\Activity;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $activities = Activity::all();
        return view('home', compact('activities'));
    }
}