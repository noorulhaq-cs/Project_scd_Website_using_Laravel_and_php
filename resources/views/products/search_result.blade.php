@extends('frontend.layouts.main')
@section('main-container')

@if($products->isEmpty())
    <p class="text-muted">No products found.</p>
@else
    @foreach($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                        Category: {{ $product->category }} <br>
                        {{ Str::limit($product->description, 50) }}
                    </p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    @endforeach
@endif


@endsection