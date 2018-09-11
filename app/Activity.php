<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function subCategory() {
    	return $this->belongsTo(SubCategory::class, 'sub_categorie_id');
    }
}
