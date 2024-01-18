@extends('layouts.frontend.main')
@section('content')
       <!-- Page title -->
       <div class="page-title parallax parallax1">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="page-title-heading">

                        <h1 class="title"></h1>
                    </div><!-- /.page-title-captions -->  
                    <div class="breadcrumbs">
                        <ul>
                            <li class="home"><i class="fa fa-home"></i><a href="{{route('home')}}">Home</a></li>
                            <li>{{$valuechain->title}}</li>
                            <li>{{$pest->title}}</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Services item -->
    <section class="flat-row services-grid">
        <div class="container">
            <div class="wrap-item wrap-column clearfix">
                @forelse ($bioproducts as $bioproduct)
                    
          <div class="item border-shadow flat-column3 clearfix" >
                <div class="item-border clearfix">
                    <div class="featured-item" style="height:250px">
                        <a href="{{route('bioproduct.details',$bioproduct->id)}}"> <img src="{{asset('backend/uploads/'.$bioproduct->image)}}" alt=""   alt="image"></a>
                    </div><!-- /.feature-post -->
                    <div class="content-item" style="height: 200px">
                        <br>
                        <span class="category">{{$bioproduct->category}}</span>
                        <h4 class="title-item">Name:<a href="{{route('bioproduct.details',$bioproduct->id)}}">{{$bioproduct->title}}</a></h4>
                        <div class="">
                            <span> Active Ingredinet: <i class="date-time">{{$bioproduct->active_ingredient}}</i></span>
                        </div>
                    </div><!-- /.contetn-post -->
                </div><!-- /.entry-border -->
            </div>
            @empty
                 
            <div class="row">
                <div class="col-md-12">  
                    <div class="title-section text-center">
                      
                        <h1 class="cd-headline clip is-full-width">
        
                                No Data Found
                             
                        </h1>
                        
                        
                    </div>      
                </div>
              
            </div>
            @endforelse
            
             
            </div>         
        </div><!-- /.container -->   
    </section>
    {{-- <section class="flat-quote bg-theme clearfix">
           <div class="container">
               <div class="quote-text float-left">
                   <h3>Would you like to Request for a call back on Kalro Bio Protection Products?</h3>
                   <p>Just submit your contact details and we’ll be in touch shortly.</p>
               </div>
               <div class="quote-link float-right">
                   <a href="#" class="flat-button style2">Book</a>
               </div>
           </div>
    </section>    --}}
@endsection