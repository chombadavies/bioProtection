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
                        <li><a href="{{route('news')}}">News</a></li>
                        <li><a href="#">{{$news->title}}</a></li>
                        
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
                  <h2 style="text-align: justify;margin:0">{{$news->title}}</h2> 
<br>
                  <div>
                    {{-- {{route('browseby.category',$news->category->id)}} --}}
                    <span> <b> Category: </b><a href="" style="color: #009d40"> {{$news->category->title}}</a></span>

                  </div>      
                </div>
            </div> 
            <hr>
              
        <br>
        <div class="row">
          <div class="col-md-12">

            <h2>Overview</h2>
          <div></div>
     <div>{!!$news->summery!!}</div>
          </div>

          <div>
            {{-- {{asset('backend/uploads/'.$news->image)}} --}}
            <div> <img src="" alt=""></div>
           
           {!!$news->description!!}
          </div>
            
        </div><br>

    
      
        <div class="row">
            <div class="col-md-12">  
                <div class="title-section text-center">
                  
                    <h1 class="cd-headline clip is-full-width">
                      
                      
                            <b class="is-visible"> Related News Articles</b>
                         
                    </h1>
                </div>      
            </div>
          
        </div>
     
        
      <hr style="color: #009d40; height: 1px; background-color: #009d40;">
      
             
                @foreach ($relatedNews as $news)
    <a href="{{ route('news.details', $news->id) }}" style="text-decoration: none; color: inherit;">
        <div class="row align-items-center">
            <div class="col-md-3">
                <img src="{{asset('backend/uploads/'.$news->image) }}" alt="{{ $news->title }}" height="80" width="100" style="border-radius: 20px">
            </div>
            <div class="col-md-8">
                <h4><b>{{ $news->title }}</b></h4>
                {{-- Uncomment the next line if you want to include a description --}}
                {{-- <p class="card-text" style="text-align: justify">{{ strip_tags(str_limit($resource->description, $limit = 350, $end = '...')) }}</p> --}}
            </div>
            <div class="col-md-1 text-end">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </a>
    <hr style="color: #009d40; height: 1px; background-color: #009d40;">
    <br>
@endforeach


          
<br>
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