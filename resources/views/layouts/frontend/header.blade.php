<header id="header" class="header header-classic header-style2 bg-white box-shadow1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div id="logo" class="logo">
                    <a href="{{route('home')}}" rel="home">
                        <img src="{{asset('frontend/images/slides/meme.jpg')}}" alt="logo">
                    </a>
                </div><!-- /.logo -->
            </div>
            <div class="col-lg-9">
                <div class="flat-wrap-header">
                    <div class="nav-wrap clearfix">        
                        <nav id="mainnav" class="mainnav style2 color-93a float-left">
                            <ul class="menu"> 
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="">Find Products</a></li>
                                <li><a href="">Resources</a>
                                    <ul class="submenu"> 
                                        <li><a href="">Resources </a></li>
                                        <li><a href="">Resources  02</a></li>
                                        <li><a href="">Resources 03</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="a">Partners</a></li>
                             
                                {{-- <li><a href="">Find Products</a></li>
                              
                                <li><a href="">Find Products</a></li>                       --}}
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->  
                      

                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->  
                    </div><!-- /.nav-wrap -->
                    
                </div>
            </div>
        </div>
    </div>
</header>