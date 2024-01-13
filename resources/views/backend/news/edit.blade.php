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
            <div>
          <a href="{{route('news.index')}}" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> News List</a>
        
          </div>
          <br>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('news.update',$news->id)}}" method="post" enctype="multipart/form-data">@csrf
                @method("put")
                <div class="card-body">
                    <div class="row">
                <div class="col-md-4">
                    <label for="">Pest Name</label>
                    <input type="text" class="form-control" name="title" value="{{$news->title}}">
                </div>
                <div class="col-md-4">
                    <label for="">Pest Image </label>
                    <input type="file" class="form-control" name="image">
                    <img src="{{asset('backend/uploads/'.$news->image)}}" alt="image" height="50px" width="50px" >
                </div>             
               
                <div class="col-md-4">
                    <label for="">Publish Date </label>
                    <input type="date" class="form-control" name="publish_date" value="{{$news->publish_date}}">
                </div>
                 
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label for="">News Summery</label>
                   
                    <textarea name="summery" id="" cols="30" rows="4" class="form-control">{{$news->summery}} </textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label for="">News Description</label>
                   
                    <textarea name="description" id="" cols="30" rows="7" class="form-control"> {{$news->description}}</textarea>
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