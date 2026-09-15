<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Category Name:</label><br>
            <input type="text" name="name" value="{{ $category->name }}" required>
        </p>
        <button type="submit">Update Category</button>
    </form>
    
    <br>
    <a href="{{ route('categories.index') }}">← Back to Categories</a>
</body>
</html>