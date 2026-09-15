<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <style>
        body { font-family: Tahoma, sans-serif; direction: ltr; text-align: left; padding: 40px; background-color: #f4f4f9; }
        .card { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); width: 450px; }
        h1 { color: #333; }
        p { font-size: 16px; color: #555; }
        a { display: inline-block; margin-top: 20px; text-decoration: none; color: #007bff; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Product Details</h1>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }} $</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
        <p><strong>Category:</strong> {{ $product->category->name ?? 'No Category' }}</p>

        <a href="/products">← Back to Products List</a>
    </div>
</body>
</html>