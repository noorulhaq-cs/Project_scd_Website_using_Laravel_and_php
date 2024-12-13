@extends('frontend.layouts.main')
@section('main-container')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="d-flex flex-row-reverse p-2">
            <input 
                type="text" 
                class="form-control" 
                id="product-search" 
                placeholder="Search by name or category">
        </div>
        <div id="product-results" class="row mt-3">
            <!-- Results will be displayed here dynamically -->
        </div>
        @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }} alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ Session::get('message') }}
            </div>
        @endif
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
                    url: '{{ route('product.search') }}', // Update route for product search
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