
@extends('frontend.layouts.main')
@section('main-container')
   
    <main>
       

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('frontend/pictures/slider3.jpg')}}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Explore New Horizons</h5>
 <p>Adventure awaits at every corner.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('frontend/pictures/slider2.jpg')}}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Innovate Your World</h5>
 <p>Transforming ideas into reality.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{url('frontend/pictures/slider1.jpg')}}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Connect & Inspire</h5>
            <p>Building communities, one connection at a time.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

  
         
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                            <img src="{{url('frontend/pictures/g1.png')}}" alt="T-Shirt 1">
                        <p>Red</p>
                        <p>RS:1200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                            <img src="{{url('frontend/pictures/sample2.png')}}" alt="T-Shirt 2">
                        
                        <p>Plain  white</p>
                        <p>RS:1200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                            <img src="{{url('frontend/pictures/g4.png')}}" alt="T-Shirt 4">
                        
                        <p>Navy</p>
                        <p>RS:1500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                            <img src="{{url('frontend/pictures/g5.png')}}" alt="T-Shirt 5">
                        
                        <p>Cream</p>
                        <p>RS:1500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                            <img src="{{url('frontend/pictures/sample1.png')}}" alt="T-Shirt 1">
                       
                        <p>Plain black</p>
                        <p>RS:1200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                    <img src="{{url('frontend/pictures/g3.png')}}" alt="T-Shirt 3">
               
                        <p>Yellow</p>
                        <p>RS:1500</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                      
                    <img src="{{url('frontend/pictures/g2.png')}}" alt="T-Shirt 2">
               
                        <p>Black</p>
                        <p>RS:1200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="t-shirt" onclick="window.location.href='{{url('/Product_detail')}}'" >
                        
                            <img src="{{url('frontend/pictures/sample4.png')}}" alt="T-Shirt 4">
                      
                        <p>Plain navy</p>
                        <p>RS:1500</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
     @endsection
