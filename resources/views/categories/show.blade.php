<!DOCTYPE html>
<html>
<head>
    <title>Category Details</title>
</head>
<body>
    <h1>Category Details</h1>

    <p><strong>Category Name:</strong> {{ $category->name }}</p>

    <hr>
    <h3>Products in this Category:</h3>
    @if(isset($category->products) && $category->products->count() > 0)
        <ul>
            @foreach($category->products as $product)
                <li>{{ $product->name }} - Price: {{ $product->price }} $</li>
            @endforeach
        </ul>
    @else
        <p>No products found in this category.</p>
    @endif

    <br>
    <a href="{{ route('categories.index') }}">← Back to Categories List</a>
</body>
</html>