<?php

namespace App\Models;

use App\Models\Poste;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    function poste()
    {
    return $this->belongsTo(Poste::class);
    }
    }
    
