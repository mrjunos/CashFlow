<?php

namespace CashFlow;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

    public function category() {
    	return $this->belongsTo(Category::class, 'categorie_id');
    }
}