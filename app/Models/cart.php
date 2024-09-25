<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    public function user(){

        return $this->belongsTo(user::class);

    }
    public function product(){

        return $this->belongsTo(product::class);

    }
    public function image(){

        return $this->belongsTo(Image::class);

    }
}
