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
                        <li><a href="#">Resources</a></li>
                        
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
                  <p style="text-align: justify;margin:0">Biocontrol and biopesticide products cause less harm to the environment, human health, and crops when compared to conventional pesticides. Are you interested  in bioprotection but don’t know where to begin? Our resources include all the information you need to become informed: the basics of bioprotection, integrated pest management, pest and crop guides, as well as real-life examples.</p> 
                   <br> 
                  <p style="margin: 0;justify-content:center;align-items:center;display:flex">Do you want the latest resources and guides direct to your inbox ?  <a href="" style="color: #009d40;padding:2px"> Sign-up to our email alerts</a>
                </p>          
                </div>
            </div> 

            <div class="row">
                <div class="col-md-12">  
                    <div class="title-section text-center">
                      
                        <h1 class="cd-headline clip is-full-width">
                          
                            <span class="cd-words-wrapper">
                                <b class="is-visible"> Resources</b>
                             
                            </span>
                        </h1>
                    </div>      
                </div>
              
            </div>

              
        <br>
        <div class="row">
            @foreach ($themes as $theme)

            <div class="col-md-4">
                <div class="card" style="width: 100%;border:none">
                    <img class="card-img-top" src="{{asset('backend/uploads/'.$theme->image)}}" alt="Card image cap">
                    <br>
                    <div class="card-body">
                      <h5 class="card-title">{{$theme->title}}</h5>
                      <p class="card-text" style="text-align: justify"> {{strip_tags(str_limit($theme->description,$limit=250,$end='...'))}}</p>
                      <br>
                      <a href="#" class="btn btn-outline-success">Read More</a>
                    </div>
                  </div>
                  <br>
            </div>
            
            @endforeach
            
        </div>

      
      
    </div>
</section>





@endsection