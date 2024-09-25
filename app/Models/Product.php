<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function stars(){

        return $this->hasMany(star::class);
    }

    public function category(){
     return $this->belongsTo(catagories::class);
    }

    public function orders(){

        return $this->hasMany(Order::class);
    }
    public function cart(){

        return $this->hasMany(cart::class);
    }
    public function information(){

        return $this->hasMany(information::class);

    }

    public function images(){

        return $this->hasMany(Image::class);

    }
    public function Comment(){

        return $this->hasMany(Comment::class);

    }

}
