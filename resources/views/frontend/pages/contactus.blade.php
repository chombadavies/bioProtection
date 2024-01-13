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
                        <li><a href="new-fullwidth.html">Contact Us</a></li>
                        
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

@include('layouts.notifications')

<section class="flat-row page-contact">
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
    <div class="container">
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
                            <span class="flat-input"><textarea name="message" placeholder="Messages" required="required"></textarea></span>
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
@endsection