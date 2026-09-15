<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products List</title>
    <style>
        body { font-family: Tahoma, sans-serif; direction: ltr; text-align: left; padding: 40px; background-color: #f4f4f9; }
        .card { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); width: 500px; }
        h1 { color: #333; }
        ul { padding-left: 20px; }
        li { margin-bottom: 12px; font-size: 16px; }
        a { text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Products List</h1>
        <ul>
            @forelse($products as $product)
                <li>
                    <a href="/products/{{ $product->id }}"><strong>{{ $product->name }}</strong></a> 
                    - Price: {{ $product->price }} $ 
                    (Category: {{ $product->category->name ?? 'No Category' }})
                </li>
            @empty
                <li>No products available.</li>
            @endforelse
        </ul>
        <a href="/categories">← Go to Categories List</a>
    </div>
</body>
</html>