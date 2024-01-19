<?php

namespace App\Http\Controllers\Backend;

use App\Models\Theme;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Themes';
        return view('backend.themes.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Create Themes';
        return view('backend.themes.create',$data);
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
     
            
           $resource=Theme::create($data);
        
           if ($resource){
               return redirect()->route('themes.index')->with('success','Theme Created Successfully');
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
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title']='Edit Theme';
        $theme=Theme::findOrFail($id);
        return view('backend.themes.edit',$data)->with(compact('theme'));
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
        $theme=Theme::findOrFail($id);
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
            $image= $theme->image;
            
        }
       $data['image']=$image;
     
            
          $status=$theme->fill($data)->save();
        
           if ($status){
               return redirect()->route('themes.index')->with('success','Theme Updated~ Successfully');
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
        $themes=Theme::findOrFail($id);
        $themes->delete();
        return redirect()->route('themes.index')->with('success','Theme Deleted successfully');
    }

    public function fetchThemes(){

        $models = DB::select('SELECT * FROM `themes`');
       
      
        return Datatables::of($models)
           ->rawColumns(['action','photo','descrption'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })       
           ->editColumn('description',function($model){
            $text=$model->description;
            $description=Str::limit(strip_tags($text), $limit = 50, $end = '...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('themes.edit',$model->id);
                $delete_url = route('themes.destroy',$model->id);
            
                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" href="' . $edit_url . '">Edit Theme</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete Theme</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}
