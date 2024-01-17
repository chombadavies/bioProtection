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
                        <li><a href="#">news</a></li>
                        
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
                  <p style="text-align: justify;margin:0">Find out about our latest partners, KALRO BioProtection Portal updates, and exciting projects happening in the biopesticides and biocontrol industry.</p> 
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
                                <b class="is-visible"> News Articles</b>
                             
                            </span>
                        </h1>
                    </div>      
                </div>
              
            </div>

            <div class="page-title parallax parallax1">
             
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5"> 
                            <div class="page-title-heading">
                               
                               
                            </div><!-- /.page-title-captions -->  
                            <div class="">
                                  <select name="" id="" class="form-control">
                                    <option value="">Select Blog Category</option>
                                </select>              
                            </div><!-- /.breadcrumbs --> 
                        </div><!-- /.col-md-12 -->  
                    </div><!-- /.row -->  
                </div><!-- /.container -->                      
            </div><!-- /.page-title --> 


        <br>
        
        <div class="row">
            @foreach ($news as $news)

            <div class="col-md-4">
                <div class="card" style="width: 100%;border:none">
                    <img class="card-img-top" src="{{asset('backend/uploads/'.$news->image)}}" alt="Card image cap" style="border-radius: 20px" height="60%">
                    <br>
                    <div class="card-body">
                      <h5 class="card-title">{{$news->title}}</h5>
                      <p class="card-text" style="text-align: justify"> {{strip_tags(str_limit($news->summery,$limit=250,$end='...'))}}</p>
                      <br>
                      <a href="{{route('browseby.theme',$news->id)}}" class="btn btn-outline-success">Read More</a>
                    </div>
                  </div>
                  <br>
            </div>
            
            @endforeach
            
        </div><br>
      
  
    <br>
    
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