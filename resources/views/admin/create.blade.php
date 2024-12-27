@extends('frontend.layouts.main')

@section('main-container')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .error-messages {
            background-color: #ffe6e6;
            color: #d8000c;
            border: 1px solid #d8000c;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <main>
        <div class="container">
            <h2>Add New Product</h2>
            @if ($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="color">Color:</label>
                    <input type="text" name="color" id="color">
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" name="price" id="price">
                </div>
                <div>
                    <label for="image">Choose File</label>
                    <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">
                </div>
                <div>
                    <label for="categorie_id">Category:</label>
                    <input type="number" name="categorie_id" id="categorie_id">
                </div>
                <div>
                    <button type="submit">Add Product</button>
                </div>
            </form>
        </div>
    </main>
@endsection
