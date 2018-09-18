<?php

namespace CashFlow\Http\Controllers;

use CashFlow\Activity;

use Carbon\Carbon;

use Jenssegers\Date\Date;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function home() {
        $date = Carbon::today()->format('Y-m-d');
        return redirect()->action('HomeController@day', compact('date'));
    }

    public function day($date) {

        $date = new Date(Carbon::parse($date));

        $activities = Activity::whereDate('created_at', $date)->get();

        $ingresosIni = Activity::whereDate('created_at', '<', $date)->where('type', 2)->sum('value');
        $ingresosFin = Activity::whereDate('created_at', '<=', $date)->where('type', 2)->sum('value');
        $egresosIni = Activity::whereDate('created_at', '<', $date)->where('type', 1)->sum('value');
        $egresosFin = Activity::whereDate('created_at', '<=', $date)->where('type', 1)->sum('value');

        $saldoIni = $ingresosIni-$egresosIni;
        $saldoFin = $ingresosFin-$egresosFin;

        return view('home', [
            'date' => $date,
            'activities' => $activities,
            'saldoIni' => $saldoIni,
            'saldoFin' => $saldoFin,
        ]);
    }
}