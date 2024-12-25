@extends('frontend.layouts.main')

@section('main-container')
    <style>
        .container {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        .success-message {
            margin: 10px 0;
            padding: 10px;
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
        }
    </style>

    <main>
        <div class="container">
            
            <h2>Product List</h2>
            <a href="{{ route('admin.create') }}">Add New Product</a>
            {{-- <a href="{{ route('relationship.index')  }}" class="btn btn-primary">Display</a> --}}
            @if ($message = Session::get('success'))
                <div class="success-message">{{ $message }}</div>
            @endif
{{-- 


            <div class="d-flex flex-row-reverse p-2">
                <input type="text" class="form-control" name="query" id="product-search" placeholder="Search by name or price">
            </div>

            <ul id="product-results" class="list-group mt-2" style="display: none;">
                <!-- AJAX search results will appear here -->
            </ul> --}}



            <table>
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product['category']['name'] }}</td>
                        <td>
                            <a href="{{ route('admin.show', $product->id) }}">View</a> |
                            <a href="{{ route('admin.edit', $product->id) }}">Edit</a> |
                            <form action="{{ route('admin.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        
        @push('scripts')
        <script>
            $(document).ready(function() {
                $('#product-search').on('keyup', function() {
                    let query = $(this).val();
                    if (query.length > 0) {
                        // Perform the AJAX request
                        $.ajax({
                            url: '{{ route('search') }}', // Correct route to the search method
                            method: 'GET',
                            data: { query: query },
                            success: function(response) {
                                // Update the results section with the response
                                $('#product-results').html(response);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    } else {
                        $('#product-results').empty();
                    }
                });
            });
        </script>
        @endpush

    </main>

@endsection
