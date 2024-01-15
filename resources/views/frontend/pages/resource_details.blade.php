@extends('layouts.frontend.main')

@section('content')
<div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="page-title-heading">
                   
                   
                </div><!-- /.page-title-captions -->  
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('themes')}}">resources</a></li>
                        <li><a href="#">{{$resource->title}}</a></li>
                        
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

@include('layouts.notifications')

<section class="flat-row page-contact">
    <div class="container">
       
            <div class="row">
                <div class="col-md-12">
                  <h2 style="text-align: justify;margin:0">{{$resource->title}}</h2> 
<br>
                  <div>
                    <span> <b> Theme: </b><a href="{{route('browseby.theme',$resource->theme->id)}}" style="color: #009d40"> {{$resource->theme->title}}</a></span>

                  </div>      
                </div>
            </div> 
            <hr>

          

              
        <br>
        <div class="row">
          <div class="col-md-12">

            <h2>Overview</h2>
<div></div>
     <div>{!!$resource->introduction!!}</div>
          </div>

          <div>
           {!!$resource->description!!}
          </div>
            
        </div><br>
      


        <div class="row">
            <div class="col-md-12">  
                <div class="title-section text-center">
                  
                    <h1 class="cd-headline clip is-full-width">
                      
                      
                            <b class="is-visible"> Related Themes</b>
                         
                    </h1>
                </div>      
            </div>
          
        </div>

          
    <br>
    {{-- <div class="row">
        @foreach ($otherThemes as $theme)

        <div class="col-md-3">
            <div class="card" style="width: 100%;border:none">
                <img class="card-img-top" src="{{asset('backend/uploads/'.$theme->image)}}" alt="Card image cap">
                <br>
                <div class="card-body">
                  <h5 class="card-title">{{$theme->title}}</h5>
                  <p class="card-text" style="text-align: justify"> {{strip_tags(str_limit($theme->description,$limit=350,$end='...'))}}</p>
                  <br>
                  <a href="{{route('browseby.theme',$theme->id)}}" class="btn btn-outline-success">Read More</a>
                </div>
              </div>
              <br>
        </div>
        
        @endforeach
        
    </div><br> --}}

    <div class="row">
        <div class="col-md-12">  
            <div class="title-section text-center">
              
                <h1 class="cd-headline clip is-full-width">

                        Looking for safe and sustainable ways of managing pests and diseases?
                     
                </h1>
                <a href="{{route('home')}}" class="flat-button"><i class="fa fa-search"></i> Search bioprotection products</a>
                
            </div>      
        </div>
      
    </div>
      
    </div>
</section>

@endsection