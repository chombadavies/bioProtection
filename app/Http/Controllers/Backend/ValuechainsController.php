<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pest;
use App\Models\ValueChain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;

class ValuechainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='ValueChains';

        return view('backend.valuechains.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put("page","Create Value Chain");
     
        $data['page_title']='Create Value Chain';
        return view('backend.valuechains.create',$data);
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
        $valuechain=ValueChain::create($data);
        if ($valuechain){
            return back()->with('success','Value Chain created Successfully');
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
        $data['page_title']="Edit Value Chain";
        $valuechain=ValueChain::findOrFail($id);
        return view('backend.valuechains.edit',$data)->with(compact('valuechain'));
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
        $valuechain=ValueChain::findOrFail($id);

        $status=$valuechain->fill($data)->save();
        if ($status){
            return redirect()->route('valuechains.index')->with('success','Value Chain Updated Successfully');
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

    public function fetchValueChains(){

        $models = DB::select('SELECT * FROM `value_chains`');
       
      
        return Datatables::of($models)
           ->rawColumns(['action'])
        
            ->addColumn('action', function ($model) {
                $edit_url = route('valuechains.edit',$model->id);
                $delete_url = route('valuechains.destroy',$model->id);
            
                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" href="' . $edit_url . '">Edit Value Chain</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete Value Chain</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    
        
    }

  
}
