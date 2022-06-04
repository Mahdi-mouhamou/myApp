<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;


class Poste extends Model
{
    function comment(){
        return $this->hasMany(Comment::class);
    }
    
}
