<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*use HasFactory;*/
    
    
    
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function getTextAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDatetimeAttribute($value)
    {
        return ucfirst($value);
    }

}
