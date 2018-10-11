<?php

namespace CashFlow\Http\Controllers;

use CashFlow\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller {
    
    public function findAll(){

    	$categories = Category::all();
    	$data = [];
    	$data[0] = [
            'id'   => 0,
            'text' =>'Seleccione',
        ];
    	foreach ($categories as $key => $value) {
    		$data[$key+1] = ['id' => $value->id, 'text' => $value->name];
    	}
    	return response()->json($data);
    }
}