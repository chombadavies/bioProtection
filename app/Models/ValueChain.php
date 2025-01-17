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
  public function bioproducts(){
    return $this->belongsToMany('App\Models\BioProduct');
  }
  public function bioproduct(){
    return $this->hasMany('App\Models\BioProduct');
  }
}
