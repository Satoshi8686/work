<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   // use HasFactory;

   public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getTextAttribute($value)
    {
        return ucfirst($value);
    }

    public function getWriterAttribute($value)
    {
        return ucfirst($value);
    }

}
