@extends('layouts.frontend.main')

@section('content')

@php
    use Illuminate\Support\Str;
@endphp

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
                        <li><a href="new-fullwidth.html">Contact Us</a></li>
                        
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

@include('layouts.notifications')

<section class="flat-row page-contact" style="">
    <div class="container">
        <div class="wrap-infobox">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-maps box-shadow3 margin-bottom-73">
                        <div class="" style="width: 100%; height: 520px; ">
                        
                            <gmp-map center="-1.2593401670455933,36.74851608276367" zoom="14" map-id="DEMO_MAP_ID">
                                <gmp-advanced-marker position="-1.2593401670455933,36.74851608276367" title="My location">
                                </gmp-advanced-marker>
                              </gmp-map>
                        
                        </div> 
                    </div>              
                </div>
            </div> 
        </div>
    </div>
    <div class="container" >
        <div class="wrap-formcontact">
            <div class="row">
                <div class="col-lg-5">
                    <h1>How can we help you?</h1>
                    <div class="list-author">
                        <div class="info-author clearfix">
                            <div class="featured-author float-left">
                                <img src="{{asset('frontend/images/team/c1.jpg')}}" alt="image">
                            </div>
                            <div class="contact-author">
                                <h3>Call Center</h3>
                                <ul>
                                    <li>Toll-free access services</li>
                                    <li>0111010100​</li>
                                    <li>info@kalro.org</li>
                                </ul>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="margin-left_12">


                        <form action="{{route('contact.process')}}" method="post"   class="contactform style4 clearfix">@csrf
                        
                        <div>
                            <label for="" style="width: 100%">Name</label>
                            <span class="flat-input"><input name="name" id="name" type="text" placeholder="Name*" required="required"></span>
                        </div>
                        <div>
                            <label for="">Email</label>
                            <span class="flat-input"><input name="email" type="email" placeholder="Email" required="required"></span>
                        </div>
                        <div>
                            <label for="">Occupation</label>
                            <span class="flat-input"><input name="occupation" type="text"  placeholder="Occupation"></span>
                        </div>
                        <div>
                            <label for="">Organization</label>
                            <span class="flat-input"><input name="oganization" type="text" placeholder="Organization"></span>
                        </div>
                        <div>
                            <label for="">Message</label>
                            <span class="flat-input"><textarea name="message" placeholder="Messages" cols="1" rows="1" required="required"></textarea></span>
                        </div>
                        <div class="">
                            <span class="flat-input"><button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">send messages</button></span>
                        </div>
                        
                        
                        </form>
                      
                    </div>      
                </div>
            </div>
        </div>
    </div>  
</section>

<section class="flat-row page-contact">
    <div class="container">
       
            <div class="row">
                <div class="col-md-12">  
                    <div class="title-section text-center">
                      
                        <h1 class="cd-headline clip is-full-width">
                          
                          
                                <b class="is-visible">Read Our Resources</b>
                             
                        
                        </h1>
                    </div>      
                </div>
              
            </div>

              
        <br>
        <div class="row">
            @foreach ($themes as $theme)

            <div class="col-md-3">
                <div class="card" style="width: 100%;border:none">
                    <img class="card-img-top" src="{{asset('backend/uploads/'.$theme->image)}}" alt="Card image cap" style="border-radius: 20px" height="60%">
                    <br>
                    <div class="card-body">
                      <h5 class="card-title">{{$theme->title}}</h5>
                      <p class="card-text" style="text-align: justify"> {{strip_tags(Str::limit($theme->description,$limit=250,$end='...'))}}</p>
                      <br>
                      <a href="{{route('browseby.theme',$theme->id)}}" class="btn btn-outline-success">Read More</a>
                    </div>
                  </div>
                  <br>
            </div>
            
            @endforeach
            
        </div><br>
        
        <div style="float: right">
            <a href="{{route('themes')}}"class="btn btn-outline-success">view all Resources</a>
         </div>

      

{{-- 
        <div class="row">
            <div class="col-md-12">  
                <div class="title-section text-center">
                  
                    <h1 class="cd-headline clip is-full-width">
                      
                     
                       <b class="is-visible"> Popular Articles</b>
                         
                      
                    </h1>
                </div>      
            </div>
          
        </div> --}}

          
    <br>
    <div class="row">
        {{-- @foreach ($articles as $article)

        <div class="col-md-3">
            <div class="card" style="width: 100%;border:none">
                <img class="card-img-top" src="{{asset('backend/uploads/'.$article->image)}}" alt="Card image cap" style="border-radius:20px">
                <br>
                <div class="card-body">
                  <h5 class="card-title">{{strip_tags(str_limit($article->title,$limit=44,$end='...'))}}</h5>
                  <p class="card-text" style="text-align: justify"> {{strip_tags(str_limit($article->introduction,$limit=350,$end='...'))}}</p>
                  <br>
                  <div>
                    <span> <b> Theme: </b><a href="{{route('browseby.theme',$article->theme->id)}}" style="color: #009d40"> {{$article->theme->title}}</a></span>

                  </div>
                 
                  <br>
                  <a href="{{route('themes.show',$theme->id)}}" class="btn btn-outline-success">Read More</a>
                </div>
              </div>
              <br>
        </div>
        
        @endforeach --}}
        
    </div><br>
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