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
             
              
              <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="row">
                <div class="col-md-4">
                    <label for="">Blog Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-md-4">
                    <label for="">Blog Image </label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-md-4">
                    <label for="">News Category </label>
                  <select name="category_id" class="form-control">
                    <option selected disabled> Select News Category</option>
                      @foreach ($newsCategories as $category)
                      <option value="{{$category->id}}">{{$category->title}}</option>
                      @endforeach

                  </select>
                </div>
                 
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label for="">News Summery</label>
                   
                    <textarea name="summery" id="meme" cols="30" rows="4" class="form-control"> </textarea>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <label for="">News Description</label>
                   
                    <textarea name="description" id="meme1" cols="30" rows="7" class="form-control"> </textarea>
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
$('#meme1').summernote();
});
</script>

<script>
  $(document).ready(function() {
$('#summernote').summernote();
$('#meme').summernote();
});
</script>


@endpush