<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body>

    <a href="{{ route('products.create') }}">+ Add New Product</a>
    <hr>

    <h1>Products List</h1>

    <ul>
        @foreach($products as $product)
            <li style="margin-bottom: 10px;">
                <strong>{{ $product->name }}</strong> - 
                Price: {{ number_format($product->price, 2) }} $ 
                (Category: {{ $product->category->name ?? 'No Category' }})
                
            
                | <a href="{{ route('products.edit', $product->id) }}">Edit</a>

            
                | <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <br>
    <a href="{{ route('categories.index') }}">← Go to Categories List</a>

</body>
</html>