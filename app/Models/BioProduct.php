<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioProduct extends Model
{
    use HasFactory;
    protected $guarded=[];

    // public function valuechains(){
      
    //     return $this->belongsToMany( 'App\Models\ValueChain','bioproduct_crops',
    //   'valuechain_id', 'bio_products_id')->withTimestamps();
    // }

    // public function pests(){
    //     return $this->belongsToMany( 'App\Models\Pest','bioproduct_pest',
    //     'pest_id', 'bioproduct_id')->withTimestamps()->withPivot(['valuechain_id']);
    // 
    public function valuechains(){
        return $this ->belongsToMany('App\Models\ValueChain','bioproduct_valuechain',
    'valuechain_id', 'bioproduct_id');
    }
    public function valuechain(){
        return $this->belongsTo('App\Models\ValueChain');
    }
    public function pest(){
        return $this->belongsTo('App\Models\Pest');
    }
}
