@extends('layouts.frontend.main')

@section('content')
<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">
                
    <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
        <div class="slotholder"></div>

            <ul><!-- SLIDE  -->
            
                <!-- SLIDE 1 -->
                <li data-index="rs-3050" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">                        
                    <!-- <div class="overlay">
                    </div> -->
                    <!-- MAIN IMAGE -->
                   
                    <img src=" {{asset('frontend/images/slides/tol.png')}}"  alt="" style="attachment: fixed;" data-bgposition="fixed" data-kenburns="off" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                
                
                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide" 
                        id="slide-3050-layer-1" 
                        data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['-66','-66','-66','-66']" 
                        data-fontsize="['60','60','50','33']"
                        data-lineheight="['60','60','50','35']"
                        data-fontweight="['700','700','700','700']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
             
                        data-type="text" 
                        data-responsive_offset="on"                             

                        data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 16;">Find BioProtection <span>Products</span><br> For your <br><span>Crops</span>
                        {{-- <p>The Kalro BioProtection Portal maintains a database of bilogical Plabt</p><br><p> Protection Products.Browse Registered Products In</p> --}}
                    </div>

                    <form action="{{route('bioproducts')}}" method="post">@csrf

                    <select class="tp-caption flat-button style2 text-center"  name="occupation_id"
                          

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                 
                    data-x="['center','center','center','center']" data-hoffset="['-502','-400','-240','-70']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','40']" 
                    data-fontweight="['700','700','700','700']"
                    data-width="['auto']"
                    data-height="['auto']"
                    style="z-index: 3;">
                    <option selected>Occupation</option>
                    @foreach ($occupations as $occupation)
                    <option value="{{$occupation->id}}"> {{$occupation->title}}</option>
                    @endforeach
              
                </select><!-- END LAYER LINK -->

                    

                    <select class="tp-caption flat-button style2 text-center"  id="valuechainId" name="valuechain_id"
                           

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                 
                    data-x="['center','center','center','center']" data-hoffset="['-318','-200','-30','-70']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','120']" 
                    data-fontweight="['700','700','700','700']"
                    data-width="['auto']"
                    data-height="['auto']"
                    style="z-index: 3;">
                    <option selected >Crop</option>
                    @foreach ($valuechains as $valuechain)
                    <option value="{{$valuechain->id}}">{{$valuechain->title}}</option>
                    @endforeach
            </select><!-- END LAYER LINK -->

            <select class="tp-caption flat-button style2 text-center"  id="productId" name="pest_id"
                           

            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
         
            data-x="['center','center','center','center']" data-hoffset="['-134','0','210','-70']" 
            data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','200']" 
            data-fontweight="['700','700','700','700']"
            data-width="['auto']"
            data-height="['auto']"
            style="z-index: 3;">
            <option value="" selected  >Pests Controlled</option>
         
       </select><!-- END LAYER LINK -->



       <button  class="tp-caption flat-button style2 text-center"  id="productId"
                           

       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
    
       data-x="['center','center','center','center']" data-hoffset="['234','200','420','-70'" 
       data-y="['middle','middle','middle','middle']" data-voffset="['102','102','80','280']" 
       data-fontweight="['700','700','700','700']"
       data-width="['auto']"
       data-height="['auto']"
       style="z-index: 3;">
      
       <i class="icon-search"></i>  Search
    </button>
</form>
    <!-- END LAYER LINK -->
                </li>


            </ul>
    </div>
</div><!-- END REVOLUTION SLIDER --> 

<section class="flat-row v5 parallax parallax5">
    <div class="section-overlay style2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-about about-video margin-right_30">
                    
             
                    <img src="{{asset('frontend/images/slides/meme.jpg')}}" alt="" style="border-radius:18px">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-about padding-left70">
                    <div class="title-section style2 color-white">
                        <h1 class="title">what is Bio Protection? </h1>
                        <div class="sub-title">
                            Over The Last 30 Years, We’ve Been In This Corporate Consulting Business, We Were Able To Help Hundreds Of Top-Flight Companies And Thousands Of SMBs To Call The Right Decisions…
                        </div>
                        <div class="sub-title">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi. Excepteur sint occaecat cupidatat non proident.
                        </div>
                    </div>
                    <a href="{{route('read.more')}}" class="flat-button btn btn-success">Read more</a>
                </div>
            </div>
        </div>
    </div>  
</section>

<section class="flat-row section-testimonials2 padding2">
    <div class="container">
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
            <div class="col-md-6">
                <div class="card" style="width: 100%;border:none">
                    <img class="card-img-top" src="{{asset('frontend/images/slides/meme.jpg')}}" alt="Card image cap">
                    <br>
                    <div class="card-body">
                      <h5 class="card-title">Augmentative biological control: The power of enhancing ecosystems</h5>
                      <p class="card-text" style="text-align: justify">Explore augmentative biological control in agriculture, a sustainable alternative to pesticides that enhances ecosystems and crop yields. Learn about its benefits, challenges, and global impact.</p>
                      <br>
                      <a href="#" class="flat-button">Read More</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="width: 100%;border:none" >
                    <img class="card-img-top" src="{{asset('frontend/images/slides/meme.jpg')}}" alt="Card image cap" height="150px">
                    <br>
                    <div class="card-body">
                      <h5 class="card-title">Natural substance biopesticides beginner’s guide: Types and how to use </h5>
                      <p class="card-text">Explore the power of natural substance biopesticides: learn all about plant extracts, botanical and mineral oils and how to use them.</p>
                      <br>
                      <a href="#" class="flat-button">Read More</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-row section-testimonials2 padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">  
                <div class="title-section text-center">
                    <div class="symbol">
                       ​‌“ 
                    </div>
                    <h1 class="cd-headline clip is-full-width">
                        <span>2000+</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible"> Happy Client</b>
                            <b>Believe Client</b>
                            <b>Choice Client</b>
                        </span>
                    </h1>
                </div>      
            </div>
            <div class="col-md-12">
                <div class="wrap-testimonial padding-lr79">
                    <div id="testimonial-slider">
                        <ul class="slides">
                            <li>
                                <div class="testimonials style3 text-center"> 
                                    <div class="message">                                
                                        <blockquote class="whisper">
                                           "We love the approachable format, and the fact that they chose to feature customers that users can really relate to.Each client story module links to the client's website, Facebook page, and app in both the Android and Apple app stores and sets people up for success."
                                        </blockquote>
                                    </div>
                                    <div class="avatar">
                                        <span class="name">Shaya Hill</span><br>
                                        <div class="start">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="position">Tax Advice</span>
                                    </div>                      
                                </div>
                            </li>
                           <li>
                                <div class="testimonials style3 text-center"> 
                                    <div class="message">                                
                                        <blockquote class="whisper">
                                           " We worked with Consuloan. Our representative was  very knowledgeable and helpful. Consuloan made a number of suggestions to help improve our systems. Consuloan explained how things work and why it would help. We are pleased with the result and we definitely highly recommend Consuloan."
                                        </blockquote>
                                    </div>
                                    <div class="avatar">
                                        <span class="name">Alex Poole</span><br>
                                        <div class="start">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="position">CEO DeerCreative</span>
                                    </div>                      
                                </div>
                            </li>
                            <li>
                                <div class="testimonials style3 text-center"> 
                                    <div class="message">                                
                                        <blockquote class="whisper">
                                           " Even though I am a seasoned business owner myself, I am sure that there’s always room for growth, inspiration, and new ideas.It's has provided a common language that is gaining popularity in the workplace as it creates new learning and sets people up for success."
                                        </blockquote>
                                    </div>
                                    <div class="avatar">
                                        <span class="name">Anthony Jones</span><br>
                                        <div class="start">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="position">Business Planner</span>
                                    </div>                      
                                </div>
                            </li>
                        </ul>
                    </div>
                        
                    <div id="testimonial-carousel">
                        <ul class="slides clearfix">
                            <li>
                                <img alt="image" src="{{asset('frontend/images/testimonial/1.jpg')}}">
                            </li>  
                            <li>
                                <img alt="image" src="{{asset('frontend/images/testimonial/2.jpg')}}">
                            </li> 
                            <li>
                                <img alt="image" src="{{asset('frontend/images/testimonial/3.jpg')}}">
                            </li>    
                        </ul>
                    </div>
                </div><!-- /.wrap-testimonial -->
            </div>
        </div>
    </div>
</section>
 {{-- <section class="flat-row background-nopara background-image1 section-counter">
    <div class="section-overlay style2"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">  
                <div class="title-section style2 color-white text-center">
                    <h1 class="title">We advise you, you call <span>the right</span> decision!</h1>
                    <div class="sub-title">
                        We help entrepreneurs get their act together before they talk to investors.
                    </div>
                </div>          
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row --> 
        <div class="row">
          <div class="col-lg-3 col-sm-6">
              <div class="flat-counter text-center">                            
                <div class="content-counter">
                    <div class="icon-count">
                        <i class="ti-pie-chart"></i>
                    </div>
                    <div class="numb-count" data-to="90" data-speed="2000" data-waypoint-active="yes">90</div>
                    <div class="name-count">Companies consulted</div>
                </div>
            </div><!-- /.flat-counter -->
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="flat-counter text-center">                            
                <div class="content-counter">
                    <div class="icon-count">
                        <i class="ti-headphone-alt"></i>
                    </div>
                    <div class="numb-count" data-to="120" data-speed="2000" data-waypoint-active="yes">120</div>
                    <div class="name-count">Consultants</div>
                </div>
            </div><!-- /.flat-counter -->
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="flat-counter text-center">                            
                <div class="content-counter">
                    <div class="icon-count">
                        <i class="ti-bookmark-alt"></i>
                    </div>
                    <div class="numb-count" data-to="50" data-speed="2000" data-waypoint-active="yes">50</div>
                    <div class="name-count">Awards Winning</div>
                </div>
            </div><!-- /.flat-counter -->
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="flat-counter text-center">                            
                <div class="content-counter">
                    <div class="icon-count">
                        <i class="ti-heart-broken"></i>
                    </div>
                    <div class="numb-count" data-to="240" data-speed="2000" data-waypoint-active="yes">240</div>
                    <div class="name-count">Satisfied Customers</div>
                </div>
            </div><!-- /.flat-counter -->
          </div>
      </div>          
    </div><!-- /.container --> 
</section>  --}}




{{-- <section class="section-maps-form wrap-blance blancejqurey2  parallax parallax4 clearfix">
    <div class="section-overlay style2"></div>
    <div id="blance-s1" class="one-half flat-maps-form1">
        <div class="flat-maps">
            <div id="maps" class="maps" style="width: 100%; height: 533px; "></div> 
        </div> 
    </div>
    <div id="blance-s2" class="one-half flat-maps-form2 formrequest2">
        <div class="title-section style2 titlesize48 color-white">
            <h1 class="title"><span>Request</span> a call back.</h1>
            <div class="sub-title">
                Whatever specific financial, personal or investment opportuni-ties you’re looking for, be sure that the free consultation with one of our experts will sway you to signup!
            </div>
        </div> 
        <div class="wrap-formrequest">
            <form id="contactform" class="contactform wrap-form style2 clearfix" method="post" action="./contact/contact-process2.php" novalidate="novalidate">
                <span class="title-form">I would like to discuss:</span>
                <span class="flat-input flat-select">
                    <select>
                        <option value="">How can we help:*</option>
                        <option value="">How can we help:*</option>
                        <option value="">How can we help:*</option>
                    </select>
                </span>
                <span class="flat-input"><input name="phone" type="text" value="" placeholder="Phone Number:*" required="required"></span>
                <span class="flat-input"><input name="name" type="text" value="" placeholder="Your Name:*" required="required"></span>
                <span class="flat-input"><button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">SUBMIT<i class="fa fa-angle-double-right"></i></button></span>
            </form>
        </div>
    </div>
</section>  --}}

<section class="flat-row v7">
    <div class="container">
        <div class="row">
            <div class="col-md-12">  
                <div class="title-section text-center">
                    <h1 class="title">Latest News</h1>
                </div>         
            </div>
        </div>
        <div class="blog-carosuel-wrap2">
            <div class="blog-shortcode post-list" >
                <article class="entry clearfix">
                    <div class="entry-border clearfix">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" height="230" width="179" 
                           style="border-radius: 20px;" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Kalro Launces BioProtection Products</a></h2>
                            <div class="meta-data style2 clearfix">
                                <ul class="meta-post clearfix">
                                    <li class="day-time">
                                        <span>26 Dec 2017</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.contetn-post -->
                    </div><!-- /.entry-border -->
                </article>
                <article class="entry clearfix">
                    <div class="entry-border clearfix">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="{{asset('frontend/images/blog/pexels-craig-adderley-1563355.jpg')}}" height="230" width="300"
                           style="border-radius: 20px;" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Finance & Accounting</span>
                            <h2 class="title-post"><a href="services-details.html">How To use Kalro BioProducts</a></h2>
                            <div class="meta-data style2 clearfix">
                                <ul class="meta-post clearfix">
                                    <li class="day-time">
                                        <span>20 Aug 2017</span>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.contetn-post -->
                    </div><!-- /.entry-border -->
                </article>
            </div>
        </div>
    </div>  
</section>



<section class="flat-row section-client bg-section">
    <div class="container">
        <div class="row">       
            <div class="col-md-12">
                <div class="flat-client" data-item="5" data-nav="false" data-dots="false" data-auto="true">
                    <div class="client"><img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" alt="image"></div>
                    <div class="client"><img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" alt="image"></div>
                    <div class="client"><img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" alt="image"></div>
                    <div class="client"><img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" alt="image"></div>
                    <div class="client"><img src="{{asset('frontend/images/blog/pexels-simon-berger-1266810.jpg')}}" alt="image"></div>
                </div><!-- /.flat-client -->      
            </div>
        </div>
    </div>             
</section>
@endsection

@push("scripts")

<script>
     
   $("#valuechainId").on("change",function(e){
       e.preventDefault();
        var id=$(this).val();
        // alert(id);
          if(id.length>0)
          {
              var url="<?=url('valuechain/cascadePests')?>/"+id;
              
               $.get(url,function(data){
               
                   $("#productId").html(data);
               })
          }

   });
 
  
   </script>


   @endpush