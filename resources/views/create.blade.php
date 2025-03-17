
<h1>Create Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Price:</label>
    <input type="number" step="0.01" name="price" required>
    <button type="submit">Create</button>

</form>