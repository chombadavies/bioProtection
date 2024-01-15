<?php

namespace App\Http\Controllers\Backend;

use App\Models\Theme;
use App\Models\Resource;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        $data['page_title']='Resources';
        return view('backend.resources.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $themes=Theme::all();
        $data['page_title']='Create Resources';
        return view('backend.resources.create',$data)->with(compact('themes'));
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

     

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
            'introduction' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
     
            
           $resource=Resource::create($data);
        
           if ($resource){
               return redirect()->route('resources.index')->with('success','Resouce Created Successfully');
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
        $data['page_title']='Edit Resources';
        $resource=Resource::findOrFail($id);
        return view('backend.resources.edit',$data)->with(compact('resource'));
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
  
     $resource=Resource::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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
            $image= $resource->image;
            
        }
       $data['image']=$image;
     
            
          $status=$resource->fill($data)->save();
        
           if ($status){
               return redirect()->route('resources.index')->with('success','Resouce Updated~ Successfully');
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
        $resources=Resource::findOrFail($id);
        $resources->delete();
        return redirect()->route('resources.index')->with('success','Resource Deleted successfully');
    }

    public function fetchResources(){

        $models = DB::table('resources')
        ->join('themes','resources.theme_id','=','themes.id')
        ->select('resources.id', 'themes.title as theme', 'resources.title','resources.status','resources.image','resources.description','resources.introduction')
        ->get();
       
      
        return Datatables::of($models)
           ->rawColumns(['action','photo','description','introducton'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })       
           ->editColumn('introduction',function($model){
            $text=$model->introduction;
            $introduction=str_limit(strip_tags($text), $limit = 50, $end = '...');
             return $introduction;
           })
           ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text), $limit = 50, $end = '...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('resources.edit',$model->id);
                $delete_url = route('resources.destroy',$model->id);
            
                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" href="' . $edit_url . '">Edit Resource</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete Resource</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}
