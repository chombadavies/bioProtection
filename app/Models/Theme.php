<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function resources(){
        return $this->hasMany('App\Models\Resource');
    }

}
