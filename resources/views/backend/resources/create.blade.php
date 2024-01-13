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
          <a href="{{route('resources.index')}}" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> Resources List</a>
        
          </div>
          <br>
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small><?=$page_title?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              
              <form action="{{route('resources.store')}}" method="post" enctype="multipart/form-data">@csrf

                <div class="card-body">
                    <div class="row">
                <div class="col-md-6">
                    <label for="">Resource Name</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" @error('title')
                        is-invalid
                    @enderror>

                    @error('title')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="">Resource Image</label>
                    <input type="file" class="form-control" name="image" @error('record')
                        is-invalid
                    @enderror value="{{old('image')}}">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Resource Description</label>
                      <textarea name="description" id="meme" class="form-control" v @error('description')
                          
                      @enderror>{{old('description')}}</textarea>

                      @error('description')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
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
@push('scripts')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#meme').summernote();
});
</script>


@endpush