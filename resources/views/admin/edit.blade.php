@extends('frontend.layouts.main')

@section('main-container')
    <style>
        .container {
            font-family: 'Arial', sans-serif;
            max-width: 600px;
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

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-messages {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }

        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
    </style>

    <main>
        <div class="container">
            <h2>Edit Product</h2>
            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $product->name }}">
                </div>
                <div>
                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color" value="{{ $product->color }}">
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}">
                </div>
                <div>
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" value="{{ $product->category }}">
                </div>
                <div>
                    <button type="submit">Update Product</button>
                </div>
            </form>
        </div>
    </main>
@endsection
