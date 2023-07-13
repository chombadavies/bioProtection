<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\Occupation;
use App\Models\BioProduct;
use App\Models\Pest;

class IndexController extends Controller
{
public function index(){

    $occupations=Occupation::all();
    $valuechains=ValueChain::all();
    $pests=Pest::all();
   
    return view('frontend.index',compact('valuechains','pests','occupations'));
    
}

public function bioProducts(Request $request){
$data=$request->all();
$valuechain=ValueChain::where('id',$data['valuechain_id'])->first();
$pest=Pest::where('id',$data['pest_id'])->first();

$bioproducts=BioProduct::where(["valuechain_id"=>$data['valuechain_id'],"pest_id"=>$data['pest_id']])->get();

    return view('frontend.pages.bioproducts')->with(compact('bioproducts','valuechain','pest'));
}

public function bioProductDetails($id){
    return view('frontend.pages.bioproduct_details');
}

public function contactus(){
    return view('frontend.pages.contactus');
}
}