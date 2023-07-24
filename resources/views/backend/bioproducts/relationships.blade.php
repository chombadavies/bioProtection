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
             
              
              <form action="{{route('relationships.store')}}" method="post" enctype="multipart/form-data">@csrf

    
              
               
                <div class="card-body">
                    <div class="row">
              
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Bio Protection Products</label>
                            <select name="bioproduct_id" id="" class="form-control" >
                                <option value="" selected disabled>Select BiProtection Product</option>
                              @foreach ($bioproducts as $bioproduct)
                              <option value="{{$bioproduct->id}}">{{$bioproduct->title}}</option>
                              @endforeach
                               
                            </select>
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
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Controlled pest</label>
                    <select name="pest_id[]"  class="form-control" multiple>
                        <option  selected disabled>Select Controled Pests</option>
                        @foreach ($pests as $pest)
                        <option value="{{$pest->id}}">{{$pest->title}}</option>
                        @endforeach
                        
                       
                    </select>
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

@endpush