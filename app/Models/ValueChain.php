<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueChain extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function pests(){
        return $this->hasMany('App\Models\Pest');
      }

}
