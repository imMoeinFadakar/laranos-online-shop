<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagories extends Model
{
    use HasFactory;

    public function products(){

        return $this->hasMany(product::class,);

    }

    //Admin rights : Add ,  edit ,  delete , see in categories



}
