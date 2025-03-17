
<h1>Product Details</h1>
<p>Name: {{ $product->name }}</p>
<p>Price: ${{ $product->price }}</p>

<a href="{{ route('products.index') }}">Back</a>