<?php

namespace CashFlow\Http\Controllers;

use CashFlow\Category;

use Illuminate\Http\Request;

class ActivityController extends Controller {
	
	public function create() {

		$categories = Category::all();

		return view('activities.create', compact('categories'));

	}
}