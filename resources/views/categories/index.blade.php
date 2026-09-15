<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories List</title>
    <style>
        body { font-family: Tahoma, sans-serif; direction: ltr; text-align: left; padding: 40px; background-color: #f4f4f9; }
        h1 { color: #333; margin-bottom: 20px; }
        ul { background: #fff; padding: 20px 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); width: 350px; list-style-type: none; }
        li { padding: 10px 0; border-bottom: 1px solid #eee; font-size: 16px; color: #555; }
        li:last-child { border-bottom: none; }
    </style>
</head>
<body>

    <h1>Categories List</h1>

    <ul>
        @forelse($categories as $category)
            <li>{{ $category->name }}</li>
        @empty
            <li>No categories found.</li>
        @endforelse
    </ul>

</body>
</html>