@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2>About Us</h2>
                    <p>Welcome to our clothing store! We are passionate about providing high-quality, fashionable apparel for all occasions. Our mission is to empower you through style, making you feel confident and comfortable every day.</p>
                    
                    <h4>Our Story</h4>
                    <p>Founded in [Year], we started as a small boutique with a vision to create a brand that prioritizes style, quality, and sustainability. Over the years, we have grown into a multifaceted e-commerce platform, catering to fashion enthusiasts worldwide.</p>
                    
                    <h4>Brand Values</h4>
                    <ul>
                        <li><strong>Sustainability:</strong> We believe in responsible fashion. Our materials are sourced with care, and we strive for eco-friendly practices.</li>
                        <li><strong>Quality:</strong> Each piece in our collection undergoes rigorous quality checks to ensure durability and comfort.</li>
                        <li><strong>Diversity:</strong> Fashion is for everyone. Our collections cater to a wide range of styles, sizes, and preferences.</li>
                    </ul>
    
                    <h4>Customer Commitment</h4>
                    <p>Your satisfaction is our priority. We are dedicated to providing exceptional customer service and making your shopping experience seamless. Whether it’s through our easy returns or prompt support, we’re here for you.</p>
                    
                    <p>Thank you for choosing us as your go-to destination for stylish clothing.</p>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="{{url('frontend/pictures/show1.jpg')}}" alt="Clothing Store" class="img-fluid rounded">
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </main>
@endsection