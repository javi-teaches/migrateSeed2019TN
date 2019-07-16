<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name', 'price', 'image', 'brand_id', 'category_id', 'user_id'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function colors()
	{
		return $this->belongsToMany(Color::class)->withTimestamps();
	}

	public function toPesos($decimal)
	{
		// code...
	}
}
