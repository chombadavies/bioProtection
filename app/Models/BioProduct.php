<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioProduct extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function valuechains(){
      
        return $this->belongsToMany( 'App\Models\ValueChain','bioproduct_crops',
      'valuechain_id', 'bio_products_id')->withTimestamps();
    }

    public function pests(){
        return $this->belongsToMany( 'App\Models\Pest','bioproduct_pests',
        'pest_id', 'bio_products_id')->withTimestamps();
    }
}
