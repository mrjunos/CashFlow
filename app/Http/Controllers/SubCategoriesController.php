<?php

namespace CashFlow\Http\Controllers;

use CashFlow\SubCategory;

use Illuminate\Http\Request;

class SubCategoriesController extends Controller {
    
    public function find($categoryId) {

    	$categories = SubCategory::where('category_id', $categoryId)->get();
    	$data = [];
    	foreach ($categories as $key => $value) {
    		$data[$key+1] = ['id' => $value->id, 'text' => $value->name];
    	}
    	return response()->json($data);
    }
}