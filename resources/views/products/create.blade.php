<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <p>
            <label>Product Name:</label><br>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>Price:</label><br>
            <input type="number" step="0.01" name="price" required>
        </p>
        <p>
            <label>Category:</label><br>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </p>
        <button type="submit">Save Product</button>
    </form>
    
    <br>
    <a href="{{ route('products.index') }}">← Back to Products</a>
</body>
</html>