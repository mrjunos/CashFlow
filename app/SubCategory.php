<?php

namespace CashFlow;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

	protected $fillable = [
		'name',
		'category_id',
		'user_id',
	];

	public function category() {
		return $this->belongsTo(Category::class, 'categorie_id');
	}
}