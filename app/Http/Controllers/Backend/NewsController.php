<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["page_title"]="News List";
        return  view("backend.news.index",$data);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["page_title"]="Create News";
      return  view("backend.news.create",$data);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();  

        if ($request->hasFile('image')) {
          
            $image_tmp = $request->file('image');
          
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;

              
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image= "";
            
        }
       $data['image']=$image;
     
            
           $news=News::create($data);
        
           if ($news){
               return redirect()->route('news.index')->with('success','News Created Successfully');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["page_title"]="Edit News";
        $news=News::findOrFail($id);
        
        return  view("backend.news.edit",$data)->with(compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      
        $data=$request->all();

        $news=News::findOrFail($id);

        if ($request->hasFile('image')) {
          
            $image_tmp = $request->file('image');
          
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;

              
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image= $news->image;
            
        }
       $data['image']=$image;
     
           
           $status=$news->fill($data)->save();
        
           if ($status){
               return redirect()->route('news.index')->with('success','News Updated Successfully');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')->with('success','News Deleted successfully');
    }


    public function fetchNews(){

        $models = DB::select('SELECT * FROM `news`');
       
      
        return Datatables::of($models)
           ->rawColumns(['action','photo','summery','descrption'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })
           ->editColumn('summery',function($model){
            $text=$model->summery;
            $summery=str_limit(strip_tags($text), $limit = 50, $end = '...');
             return $summery;
           })
           ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text), $limit = 50, $end = '...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('news.edit',$model->id);
                $delete_url = route('news.destroy',$model->id);
            
                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" href="' . $edit_url . '">Edit News</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete News</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    
        
    }
}
