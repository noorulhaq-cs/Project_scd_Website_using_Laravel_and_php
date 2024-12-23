@if($products->isEmpty())
    <p>No products found.</p>
@else
    <ul class="list-group">
        @foreach($products as $product)
            <li class="list-group-item">
                <strong>{{ $product->name }}</strong> 
                - {{ $product->color }} 
                - ${{ number_format($product->price, 2) }}
                
                @if($product->image)
                    <br>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                @endif
            </li>
        @endforeach
    </ul>
@endif
