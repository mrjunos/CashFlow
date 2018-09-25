<?php

namespace CashFlow\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller {
	
	public function create() {
		return view('activities.create');
	}
}