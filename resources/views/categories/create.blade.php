<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <h1>Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <p>
            <label>Category Name:</label><br>
            <input type="text" name="name" required>
        </p>
        <button type="submit">Save Category</button>
    </form>
    
    <br>
    <a href="{{ route('categories.index') }}">← Back to Categories</a>
</body>
</html>