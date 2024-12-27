@extends('frontend.layouts.main')
@section('main-container')

<body>
    <div class="product-page">
        <div class="breadcrumb">
            <a href="{{ url('/') }}">Home</a> / <a href="{{ url('/Shirts') }}">T-Shirt</a>
        </div>

        <div class="product-details">
            <!-- Main product image -->
            <div class="product-image">
                <img src="{{ asset('storage/image/'.$product->image) }}" alt="{{ $product->name }}" id="mainImage">

                <!-- Thumbnail images -->
                <div class="thumbnail-images">
                    <!-- Loop through thumbnails -->
                    @if ($product->thumbnails) <!-- Assuming thumbnails are stored as a JSON array -->
                        @foreach (json_decode($product->thumbnails) as $thumbnail)
                            <img src="{{ asset($thumbnail) }}" alt="{{ $product->name }}" 
                                 onclick="changeImage('{{ asset($thumbnail) }}')">
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Product Information -->
            <div class="product-info">
                <h1>{{ $product->name }}</h1>
                    
                <p class="price">RS: {{ $product->price }}</p>

                <label for="size">Select Size</label>
                <select id="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>

                <div class="quantity">
                    <input type="number" value="1" min="1">
                    <button class="add-to-cart">Add to Cart</button>
                </div>

                <div class="product-description">
                    <h2>Product Details</h2>
                    <p>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per sq. yd. fabric constructed
                        from 100% cotton, this classic fit preshrunk jersey knit provides unmatched comfort with each
                        wear. Featuring a taped neck and shoulder, and a seamless double-needle collar, and available in
                        a range of colors, it offers it all in the ultimate head-turning package.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>

</body>
@endsection
                    
                
                    