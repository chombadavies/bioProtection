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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('pests.store')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="row">
                <div class="col-md-4">
                    <label for="">Pest Name</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-md-4">
                    <label for="">Pest Image </label>
                    <input type="file" class="form-control" name="image">
                </div>

                  <div class="form-group col-md-4">
                    <label >Value Chain</label>
                    <select name="valuechain_id"  class="form-control">
                      <option value="" selected disabled>Select Vakue Chain</option>
                       @foreach ($valuechains as $valuechain)
                       <option value="{{$valuechain->id}}">{{$valuechain->title}}</option>
                       @endforeach
                        
                    </select>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
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