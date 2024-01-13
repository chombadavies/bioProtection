@extends('layouts.backend.main')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

            @include('layouts.notifications')
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->

            <div>
          <a href="{{route('valuechains.index')}}" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> Valuechains List</a>
        
          </div>
          <br>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('valuechains.update',$valuechain->id)}}" method="post">@csrf

               @method('put')
                <div class="card-body">
                    <div class="row">
                <div class="col-md-6">
                    <label for="">Value Chain Name</label>
                    <input type="text" class="form-control" name="title" value="{{$valuechain->title}}">
                </div>
                
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" id="" class="form-control">
                        
                        <option value="active" {{$valuechain->status =="active"? "selected":""}}>Active</option>
                        <option value="inactive"{{$valuechain->status=="inactive"? "selected":""}}>In Active</option>
                    </select>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection