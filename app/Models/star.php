<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class star extends Model
{
    use HasFactory;

    public function star(){

        return $this->belongsTo(user::class, );
    }

     public function product(){

        return $this->belongsTo(product::class);
     }
}
