<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category Details</title>
    <style>
        body { font-family: Tahoma, sans-serif; direction: ltr; text-align: left; padding: 40px; background-color: #f4f4f9; }
        .card { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); width: 450px; }
        h1, h3 { color: #333; }
        p { font-size: 16px; color: #555; }
        ul { padding-left: 20px; }
        li { margin-bottom: 8px; color: #444; }
        a { display: inline-block; margin-top: 20px; text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="card">
        <h1>Category Details</h1>
        <p><strong>ID:</strong> {{ $category->id }}</p>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Description:</strong> {{ $category->description ?? 'No description' }}</p>

        <hr>
        <h3>Products in this Category:</h3>
        <ul>
            @forelse($category->products as $product)
                <li><strong>{{ $product->name }}</strong> - Price: {{ $product->price }} $ (Qty: {{ $product->quantity }})</li>
            @empty
                <li>No products found in this category.</li>
            @endforelse
        </ul>
        
        <a href="/categories">← Back to Categories List</a>
    </div>

</body>
</html>