<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Pest;
use App\Models\Theme;
use App\Models\Resource;
use App\Models\BioProduct;
use App\Models\Occupation;
use App\Models\ValueChain;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsCategory;

class IndexController extends Controller
{
public function index(){

    $occupations=Occupation::all();
    $valuechains=ValueChain::all();
    $news=News::orderBy('created_at','desc')->take(2)->get();
     $resources = Resource::orderBy('created_at', 'desc')->take(3)->get();
    $pests=Pest::all();
   
    return view('frontend.index',compact('valuechains','pests','occupations','resources','news'));
    
}

public function bioProducts(Request $request){
$data=$request->all();
$valuechain=ValueChain::where('id',$data['valuechain_id'])->first();
$pest=Pest::where('id',$data['pest_id'])->first();

$bioproducts=BioProduct::where(["valuechain_id"=>$data['valuechain_id'],"pest_id"=>$data['pest_id']])->get();

    return view('frontend.pages.bioproducts')->with(compact('bioproducts','valuechain','pest'));
}

public function bioProductDetails($id){
  $bioproduct=BioProduct::findOrFail($id);
//   dd($bioproduct);
    return view('frontend.pages.bioproduct_details')->with(compact('bioproduct'));
}

public function contactUs(){
    $themes=Theme::orderBy('created_at','desc')->take(4)->get();
  
    return view('frontend.pages.contactus',compact('themes'));
}

public function readMore(){

  
    return view('frontend.pages.readmore');
}

public function searchCrops($id){
dd($id);

}
public function searchPests($id){
dd($id);
}

public function relationships(){



    return view('frontend.pages.relationships');

   
}

public function cascadePests($id)
{
    $models = Pest::Where(['valuechain_id' => $id])->OrderBy('title')->get();
    // echo '<option value="">-----select Product---</option>';
    foreach ($models as $pest) {

        echo '<option value="' . $pest->id . '">' . $pest->title . '</option>';
    }
}

public function contactProcess(Request $request){
    $data=$request->all();

    $testimonial= Testimonial::create($data);

    if ($testimonial){
        return redirect()->route('contactus')->with('success','message sent successfully');
    }

}

public function Themes(){

    $themes=Theme::all();
    $articles = Resource::take(4)->get();
   
    // $articles = Article::orderBy('created_at', 'desc')->take(3)->get();
    return view('frontend.pages.themes',compact('themes','articles'));

}


            public function browsebyTheme($id){

            $theme=Theme::findOrFail($id);
            $otherThemes = Theme::where('id', '!=', $id)->get();
            return view('frontend.pages.browseby_theme',compact('theme','otherThemes'));
            }

            public function resourceDetails($id){

            $resource=Resource::findOrFail($id);


            $relatedResources = Resource::where(function ($query) use ($id, $resource) {
                $query->where('id', '!=', $id)
                    ->where('theme_id', $resource->theme_id);
            })->get();

            return view('frontend.pages.resource_details',compact('resource','relatedResources'));
            }


            public function news (){
                $categories=NewsCategory::all();
            return view('frontend.pages.news',compact('categories'));
            }

            public function getDefaultNews()
            {
                
            
                $defaultNews=News::orderBy('created_at','desc')->take(6)->get();

                return view('frontend.partials.news_items')->with('news', $defaultNews);
            }

            public function getNewsByCategory(Request $request){

                $categoryId = $request->input('category_id');

                // Fetch news based on the selected category
                $news = News::where('category_id', $categoryId)->get();

                // You can create a Blade view for the news items or generate HTML directly here
                return view('frontend.partials.news_items')->with('news', $news);
            }
            public function newsDetails($id){

                $news=News::findOrFail($id);
                $relatedNews = News::where(function ($query) use ($id, $news) {
                    $query->where('id', '!=', $id)
                        ->where('category_id', $news->category_id);
                })->get();
            return view('frontend.pages.news_details',compact('news','relatedNews'));
            }


            public function browsebyCategory($id){

                $category=NewsCategory::findOrFail($id); 
                dd($category->news);
                return view('frontend.pages.browseby_category',compact('category'));
            }
            }
