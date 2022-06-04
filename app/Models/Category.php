<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function produit () {
    	return $this->belongsTo(Produit::class);
    }
    use HasFactory;
}