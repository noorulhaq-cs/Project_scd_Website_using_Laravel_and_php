@extends('frontend.layouts.main')

@section('main-container')
    <style>
        .container {
            font-family: 'Arial', sans-serif;
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .details {
            padding: 10px 0;
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .details p {
            margin: 10px 0;
        }

        .details p strong {
            font-weight: bold;
            color: #000;
        }

        .back-button {
            display: block;
            width: 100%;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>

    <main>
        <div class="container">
            <h2>Product Details</h2>

            @if($product['image'])
                <img src="{{ asset('storage/image/' . $product['image']) }}" alt="{{ $product['name'] }}" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            @else
                <img src="{{ asset('image/default-profile.png') }}" alt="Default Profile Picture" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            @endif

            <div class="details">
                <p><strong>Name:</strong> {{ $product->name }}</p>
                <p><strong>Color:</strong> {{ $product->color }}</p>
                <p><strong>Price:</strong> {{ $product->price }}</p>
                <p><strong>Category:</strong> {{ $product['category']['name'] }}</p>
            </div>
            <a href="{{ route('admin.index') }}" class="back-button">Back to List</a>
        </div>
    </main>
@endsection
