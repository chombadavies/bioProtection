<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pest extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function ValueChain(){
        return $this->belongsTo('App\Models\ValueChain');
        
    }
    public function bioproducts(){
        return $this->belongsToMany('App\Models\BioProduct');
      }

      public function bioproduct(){
        return $this->hasMany('App\Models\BioProduct');
      }


}
