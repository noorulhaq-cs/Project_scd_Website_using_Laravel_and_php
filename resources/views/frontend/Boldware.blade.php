
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
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="t-shirt" onclick="window.location.href='{{ route('frontend.Productdetail', ['id' => $product->id]) }}'">
                            @if($product->image)
                                <img src="{{ asset('storage/image/' . $product->image) }}" alt="{{ $product->name }}">
                            @else
                                <img src="{{ url('frontend/pictures/default.png') }}" alt="Default Image">
                            @endif
                            <p>{{ $product->color }}</p>
                            <p>RS: {{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    
     @endsection
