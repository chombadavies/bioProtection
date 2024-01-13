<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pest;
use App\Models\BioProduct;
use App\Models\ValueChain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;


class BioProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["page_title"]="News List";
        return  view("backend.bioproducts.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put("page","Create BioProduct");
        $valuechains=ValueChain::all();
        $pests=Pest::all();
     
        $data['page_title']='Create BioProduct';
        return view('backend.bioproducts.create',$data)->with(compact('valuechains','pests'));
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
        // $rules = [
        
        //     'upload_file' => 'mimes:pdf,zip|required',
        // ];
        // $custommessage = [
          
          
        //     'upload_file.required' => ' a document is required',
        // ];
        // $this->validate($request, $rules, $custommessage);

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
       if ($request->hasFile('fact_sheet')){

        $path = $request->file('fact_sheet')->store('temp');
            $file = $request->file('fact_sheet');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('backend/manuals'), $fileName);
       }else{
        $fileName ="";
       }

          $data['fact_sheet']=$fileName;
          $data['image']=$image;
            
           $bioproduct=BioProduct::create($data);
            $bioproduct_id=$bioproduct->id;
           
        // $bioproduct->valuechains()->attach($data['valuechain_id']);  
        // $bioproduct->pests()->attach($data['pest_id']);  
        
           if ($bioproduct){
               return back()->with('success','Bio Product created Successfully');
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
        return "we are about to show bioproducts";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bioproduct=BioProduct::findOrFail($id);
        $valuechains=ValueChain::all();
        $pests=Pest::all();
        // dd($bioproduct);
        $data['page_title']="Edit Bio Product";
        return view('backend.bioproducts.edit',$data)->with(compact('bioproduct','valuechains','pests'));
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
       $bioproduct=BioProduct::findOrFail($id);
   
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
            $image= $bioproduct->image;
            
        }
       $data['image']=$image;
       if ($request->hasFile('fact_sheet')){

        $path = $request->file('fact_sheet')->store('temp');
            $file = $request->file('fact_sheet');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('backend/manuals'), $fileName);
       }else{
        $fileName =$bioproduct->fact_sheet;
       }

          $data['fact_sheet']=$fileName;
          $data['image']=$image;
            
          $status=$bioproduct->fill($data)->save();
        
           if ($status){
               return redirect()->route('bioproducts.index')->with('success','Bio Product Updated Successfully');
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
        return $id;
    }

public function relationships(){

    Session::put("page","Relationships");
    $valuechains=ValueChain::all();
    $pests=Pest::all();
    $bioproducts=BioProduct::all();
 
    $data['page_title']='Relationships';
    return view('backend.bioproducts.relationships',$data)->with(compact('valuechains','pests','bioproducts'));
}

public function relationshipsStore(Request $request){
    $data=$request->all();
     $bioproduct=BioProduct::findOrFail($data['bioproduct_id']);
    //  dd($data);
 
    $pests=$data['pest_id'];

    foreach ($pests as $pest) {
   
        $bioproduct->valuechains()->attach([$data['valuechain_id']
        =>[
             'pest_id'=>$pest
                ]
            ]); 
       }
    
        Session::put("page","Relationships");
        $valuechains=ValueChain::all();
        $pests=Pest::all();
        $bioproducts=BioProduct::all();

        $data['page_title']='Relationships';
        return view('backend.bioproducts.relationships',$data)->with(compact('valuechains','pests','bioproducts'));
    
}


public function fetchBioproducts(){

    $models = DB::select('SELECT * FROM `bio_products`');
       
      
    return Datatables::of($models)
       ->rawColumns(['action','photo'])
       ->editColumn('photo',function($model){
           $name=$model->image;
           $path=asset('backend/uploads/'.$name);
           return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
       })
     
        ->addColumn('action', function ($model) {
            $edit_url = route('bioproducts.edit',$model->id);
            $delete_url = route('bioproducts.destroy',$model->id);
            $show_url = route('bioproducts.show',$model->id);
            return '<div class="dropdown ">
    <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a style="cursor:pointer;" href="' . $edit_url . '">Edit News</a></li>
    <li><div class="dropdown-divider"></div></li>
    <li><a style="cursor:pointer;" href="' . $show_url . '">View Bio Product</a></li>
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
