@extends('frontend.layouts.main')
@section('main-container')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Search Input -->
        <div class="d-flex flex-row-reverse p-2">
            <input 
                type="text" 
                class="form-control" 
                id="product-search" 
                placeholder="Search by name or color">
        </div>

        <!-- Dynamic Search Results -->
        <div id="product-results" class="row mt-3">
            <!-- Results will be displayed here dynamically -->
        </div>

        <!-- Session Message -->
        @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }} alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ Session::get('message') }}
            </div>
        @endif

        <!-- Product Table -->
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($data as $product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->color }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>
                                <span>
                                    <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                                </span> |
                                <span>
                                    <a href="{{ route('product.destroy', $product->id) }}">Delete</a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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


@endsection
