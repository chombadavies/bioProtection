@extends('layouts.frontend.main')

@section('content')
<div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="page-title-heading">
                    <h1 class="title">{{$bioproduct->title}}</h1>
                </div><!-- /.page-title-captions -->  
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="{{route('home')}}">Home</a></li>
                        <li>{{$bioproduct->title}} Details</li>
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Services Details -->
<section class="flat-row services-details">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-3">
                <div class="sidebar">
                    <div class="widget widget-nav-menu">
                        <ul class="widget-menu">
                            <li class="active"><a href="#">Strategy</a></li>
                            <li><a href="#">Performance Improvement</a></li>
                            <li><a href="#">Private Equity</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Organization</a></li>
                            <li><a href="#">Digital</a></li>
                            <li><a href="#">Advanced Analytics</a></li>
                            <li><a href="#">Mergers &amp; Acquisitions</a></li>
                            <li><a href="#">Corporate Finance</a></li>
                            <li><a href="#">Information Technology</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Transformation</a></li>
                            <li><a href="#">Results Delivery</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-testimonials">
                        <div class="flat-testimonials owl-carousel" data-item="1" data-nav="false" data-dots="true" data-auto="true">
                            <div class="testimonials"> 
                                <div class="message">                                
                                    <blockquote class="whisper">
                                       " My experience with Construct is absolutely positive. The themes are beautifully designed and well docu-mented. Construct provides quick and competent support "
                                     </blockquote>
                                </div>
                                <div class="avatar"> 
                                    <span class="name">Alex Poole</span>
                                    <span class="position">CEO DEER CREATIVE</span>
                                </div>                      
                            </div>
                            <div class="testimonials"> 
                                <div class="message">                                
                                    <blockquote class="whisper">
                                       " My experience with Construct is absolutely positive. The themes are beautifully designed and well docu-mented. Construct provides quick and competent support "
                                     </blockquote>
                                </div>
                                <div class="avatar"> 
                                    <span class="name">Alex Poole</span>
                                    <span class="position">CEO DEER CREATIVE</span>
                                </div>                      
                            </div>
                            <div class="testimonials"> 
                                <div class="message">                                
                                    <blockquote class="whisper">
                                       " My experience with Construct is absolutely positive. The themes are beautifully designed and well docu-mented. Construct provides quick and competent support "
                                     </blockquote>
                                </div>
                                <div class="avatar"> 
                                    <span class="name">Alex Poole</span>
                                    <span class="position">CEO DEER CREATIVE</span>
                                </div>                      
                            </div>
                        </div>
                    </div> 

                    <div class="widget widget-download">
                         <div class="download">
                             <a href="#" class="flat-button style2">DOWNLOAD PDF</a>
                         </div>
                    </div> 

                    <div class="widget widget-help">
                        <div class="featured-widget">
                            <img src="images/services/w1.jpg" alt="image">
                        </div>
                        <h3>How can we help you?</h3>
                        <p>Contact us at the Consultec WP office nearest to you or submit a business inquiry online.</p>
                        <a href="#" class="flat-button style2">CONTACT US</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-12">
                <div class="item-wrap">
                 
                    <div class="video-services clearfix">
                        <div class="flat-video float-left">
                           
                                <img src="{{asset('backend/uploads/'.$bioproduct->image)}}" alt="image" >
                           
                        </div>
                        <br>
                        <br>
                        <div class="wrap-acadion float-left">
                            
                            <div class="">
                              <h2>{{$bioproduct->title}}</h2>
                              <h4 style="color:#009d40">{{$bioproduct->category}}</h4>
                              <h6 style="color:#009d40">{{$bioproduct->active_ingredient}}</h6>
                            </div><!-- /.accordion -->                    
                        </div>
                    </div><!-- /.video-services -->
                    <hr>

                    <div>
                        <ul class="UlList">
                            <li>&#9989; Permitted for use</li>
                            <br>
                            <li>&#9989;This biological product has been registered for use in Brazil by the: <a href="">Pest Control Products Board of Kenya</a></li>
                        </ul>
                    </div>
                    <br>
                  
                    <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-3">
            <button class="btn success" style="width: 90%;background-color:white;border-color:#04AA6D;color:#04AA6D"><i class="fa fa-book"></i> Product Fact sheets</button>
              </div>
              <div class="col-md-3">
            <button class="btn success" disabled style="width: 90%;background-color:white;border-color:#04AA6D;color:#04AA6D">Label</button>
              </div>
              <div class="col-md-3">
               <button class="btn success" disabled style="width: 90%;background-color:white;border-color:#04AA6D;color:#04AA6D">Safety Datasheet</button>
              </div>
                    </div>

                    <section class="flat-row services-grid">
                        <div class="container">
                            <div class="wrap-item wrap-column clearfix ">
                              
                          

                              
                                <div class="item border-shadow flat-column3 clearfix" >
                                  <div class="content-item" style="background-color: #f1f1f1;height:350px" >
                                  <br>
                                    <h2 class="title-item"><a href="">Basic Information</a></h2>
                                    <div class="date-time">
                                       <h4>Registration Number:</h4>
                                       <span>{{$bioproduct->reg_no}}</span>
                                       <h4>Category:</h4>
                                       <span>{{$bioproduct->category}}</span>
                                       <h4>Registrant:</h4>
                                       <span>{{$bioproduct->registrant}}</span>
                                       <h4>Manufacturer:</h4>
                                       <span>{{$bioproduct->manufacture}}</span>
                                    </div>
                                </div><!-- /.Content-item -->
                                </div>

                          @if($bioproduct->distributor_details != null)
                                <div class="item border-shadow flat-column3 clearfix" >
                                    <div class="content-item" style="background-color: #f1f1f1;height:350px">
                                       <br>
                                        <h2 class="title-item"><a href="">Distributor Details</a></h2>
                                        <div class="date-time">
                                            <span>{!!$bioproduct->distributor_details!!}</span>
                                        </div>
                                    </div><!-- /.Content-item -->
                                </div>  
                                @else
                                    
                                @endif

                                @if($bioproduct->detaiks != null)

                                <div class="item border-shadow flat-column3 clearfix" >
                                    <div class="content-item" style="background-color: #f1f1f1;height:350px">
                                       <br>
                                        <h2 class="title-item"><a href="">More Details</a></h2>
                                        <div class="date-time">
                                          <h5>{!!$bioproduct->details!!}</h5>
                                        </div>
                                    </div><!-- /.Content-item -->
                                </div>

                                @else
                                    
                                @endif
                               
                             
                            </div> 
                            <hr style="color: #009d40">        
                        </div><!-- /.container -->   
                    </section>
                   
                    <h3>View more crop and pest combinations for this product </h3>
                    <div class="row">
                       
                        <div class="col-md-3">
                            <button class="btn meme" value="{{$bioproduct->id}}" id="searchCrop" style="width: 90%;background-color:white;border-color:#04AA6D;color:#04AA6D"><i class="fa fa-leaf"></i> Search Crops</button>
                        </div>
                        <div class="col-md-3">
                            <button class="btn meme" value="{{$bioproduct->id}}" id="searchPest" style="width: 90%;background-color:white;border-color:#04AA6D;color:#04AA6D"><i class="fa fa-pest"></i> Search Pest</button>
                        </div>
                    </div>
                    <br>
                    <div class="search_crop">
                        <span>Find other crops this product is permitted for use on: </span>
                        <br><br>
                        <div>
                            <select name="" id="" class="form-control" style="border-color:#04AA6D">
                                <option value="">select Crop</option>
                            </select>
                        </div>
                       
                    </div>
                    <div class="search_pest">
                        <span>Find other pests this product is permitted for use on: </span>
                        <br><br>
                        <div>
                            <select name="" id="" class="form-control" style="border-color:#04AA6D">
                                <option value="">select pest</option>
                            </select>
                        </div>
                       
                    </div>


           <hr style="color: #009d40">   
           <h3>Disclainer</h3>  
           <span>Kalro cannot be held responsible for any inaccuracies in the data and information.
             Anyone acting or relying on such data and information does so entirely at their own risk.</span>   
             <br>
             <div class="col-md-3">
                <a  type="button" class="meme btn btn-l" style="background-color:white;border-color:#04AA6D;color:#04AA6D">Back to Results</a>

             </div>
      
                   
                </div><!-- /.item-wrap --> 
            </div><!-- /.Col-lg-9 -->
        </div><!-- /.row -->           
    </div><!-- /.container -->   
</section>  
@endsection
<style>
  .meme {
  border-color: #009d40 !important;
  color: #009d40 !important;
}

.meme:hover {
  background-color: #009d40 !important;
  color: white !important;
}
</style>


@push("scripts")

<script>
    $(document).ready(function(){
   $('.search_crop').hide();
   $('.search_pest').hide();

   $("#searchCrop").on("click",function(e){
       e.preventDefault();
       $('.search_crop').show();
       $('.search_pest').hide();

        var id=$(this).val();
        // alert(id);
          if(id.length>0)
          {
              var url="<?=url('bioproduct/searchCrops')?>/"+id;
              
               $.get(url,function(data){
               
                   $("#productId").html(data);
               })
          }

   });

   $("#searchPest").on("click",function(e){
       e.preventDefault();
       $('.search_crop').hide();
       $('.search_pest').show();

        var id=$(this).val();
        // alert(id);
          if(id.length>0)
          {
              var url="<?=url('bioproduct/searchPests')?>/"+id;
              
               $.get(url,function(data){
               
                   $("#productId").html(data);
               })
          }

   });


    })
    
    </script>


   @endpush



