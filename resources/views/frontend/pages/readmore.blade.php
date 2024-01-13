@extends('layouts.frontend.main')
@section('content')
<div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="page-title-heading">
                    <h1 class="title">News Masonry</h1>
                </div><!-- /.page-title-captions -->  
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><a href="new-fullwidth.html">News</a></li>
                        <li>Masonry</li>
                    </ul>                   
                </div><!-- /.breadcrumbs --> 
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="flat-row blog-masonry">
    <div class="container">
        <div class="post-wrap post-masonry wrap-column2 clearfix">
            <div class="flat-column2 post-left">
                <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                    <div class="entry-border">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="images/blog/m1.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Blake Morgan in running for conveyancer awards</a></h2>
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
                <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                    <div class="entry-border">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="images/blog/m3.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Blake Morgan in running for conveyancer awards</a></h2>
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
                <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                    <div class="entry-border">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="images/blog/m5.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Bill Gates’ foundation to sup-port Immunocore work</a></h2>
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
            </div>
            <div class="flat-column2 post-right">
                <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                    <div class="entry-border">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="images/blog/m2.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Bill Gates’ foundation to sup-port Immunocore work</a></h2>
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
                
                <article class="entry border-shadow clearfix effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
                    <div class="entry-border">
                        <div class="featured-post">
                            <a href="services-details.html"> <img src="images/blog/m4.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <div class="content-post">
                            <span class="category">Advisory Plan</span>
                            <h2 class="title-post"><a href="services-details.html">Blake Morgan in running for conveyancer awards</a></h2>
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
            </div>
        </div>
        <div class="load-post text-center effect-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
            <a href="#" class="flat-button style2">LOAD MORE</a>      
        </div>          
    </div><!-- /.container -->   
</section>   
@endsection