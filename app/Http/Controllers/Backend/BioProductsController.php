<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\BioProduct;
use App\Models\Pest;
use Intervention\Image\Facades\Image;
use Session;

class BioProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
