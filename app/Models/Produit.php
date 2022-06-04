<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Produit extends Model
{
    public function category () {
    	return $this->hasMany(Category::class);
    }
}
