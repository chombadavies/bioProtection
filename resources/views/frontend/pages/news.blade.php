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
                            </div>
                            <div class="">
                                <select name="category" id="categorySelect" class="form-control">
                                    <option selected disabled>Select Blog Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div><!-- /.row -->  
                </div><!-- /.container -->                      
            </div><!-- /.page-title --> 


        <br>
        
        
        <div id="news-container" class="row">
           
        </div>
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


@push('scripts')
<script>
    $(document).ready(function() {
        // Function to fetch and display news based on the selected category
        function fetchNews(categoryId) {
            // Make an Ajax request to fetch news based on the selected category
            $.ajax({
                url: '{{ route("getNewsByCategory") }}',
                type: 'GET',
                data: { category_id: categoryId },
                success: function(response) {
                    // Update the news container with the fetched news HTML
                    $('#news-container').html(response);
                },
                error: function(error) {
                    console.error('Ajax request failed:', error);
                }
            });
        }

        // Function to fetch and display default news
        function fetchDefaultNews() {
            // Make an Ajax request to fetch default news
            $.ajax({
                url: '{{ route("getDefaultNews") }}', // Add the route for default news
                type: 'GET',
                success: function(response) {
                    // Update the news container with the fetched default news HTML
                    $('#news-container').html(response);
                },
                error: function(error) {
                    console.error('Ajax request failed:', error);
                }
            });
        }

        // Initial call to fetch default news
        fetchDefaultNews(); // Call this function to fetch default news

        // Attach change event listener to the category select element
        $('#categorySelect').change(function() {
            // Get the selected category ID
            var categoryId = $(this).val();

            // Call the fetchNews function with the selected category ID
            fetchNews(categoryId);
        });
    });
</script>
@endpush
