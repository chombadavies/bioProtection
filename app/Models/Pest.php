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
  

}
