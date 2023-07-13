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
             
              
              <form action="{{route('bioproducts.store')}}" method="post" enctype="multipart/form-data">@csrf

    
                <div class="card-body">
                    <div class="row">
                <div class="col-md-4">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-md-4">
                    <label for="">Registering Body </label>
                    <input type="text" class="form-control" name="registrant">
                </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        <option value="microbial">microbial</option>
                        <option value="naturalProduct">Natural Product</option>
                        <option value="Semi Chemical">Semi Chemical</option>
                    </select>
                  </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="row">
                <div class="col-md-4">
                    <label for="">Active Ingredient</label>
                    <input type="text" class="form-control" name="active_ingredient">
                </div>
                <div class="col-md-4">
                    <label for="">Manufacture </label>
                    <input type="text" class="form-control" name="manufacture">
                </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Value Chain</label>
                    <select name="valuechain_id" id="" class="form-control">
                        <option value="" selected disabled>Select value chain</option>
                      @foreach ($valuechains as $valuechain)
                      <option value="{{$valuechain->id}}">{{$valuechain->title}}</option>
                      @endforeach
                       
                    </select>
                  </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="row">
                <div class="col-md-3">
                    <label for="">Registration Number</label>
                    <input type="text" class="form-control" name="reg_no">
                </div>
                <div class="col-md-3">
                    <label for="">Fact sheets Manual </label>
                    <input type="file" class="form-control" name="fact_sheet">
                </div>
                <div class="col-md-3">
                  <label for="">Bio Category Image</label>
                  <input type="file" class="form-control" name="image">
              </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Controlled pest</label>
                    <select name="pest_id"  class="form-control">
                        <option  selected disabled>Select Controled Pests</option>
                        @foreach ($pests as $pest)
                        <option value="{{$pest->id}}">{{$pest->title}}</option>
                        @endforeach
                        
                       
                    </select>
                  </div>
                </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">product more details</label>
                            <textarea id="meme" name="details" required></textarea>
                        </div>
            
                                  
                </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12" class="form-control">
                            <label for="">Distributor Diteails</label>
                            <textarea id="tutu" name="distributor_details" required></textarea>
                        </div>
            
                                  
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                    </div>
              
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

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
  $('#tutu').summernote();
});
</script>
@endpush