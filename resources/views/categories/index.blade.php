<!DOCTYPE html>
<html>
<head>
    <title>Categories List</title>
</head>
<body>
    <a href="{{ route('categories.create') }}">+ Add New Category</a>
    <hr>
    <h1>Categories List</h1>

    <ul>
        @foreach($categories as $category)
            <li style="margin-bottom: 10px;">
                <strong>{{ $category->name }}</strong>
                | <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                | <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this category?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <br>
    <a href="{{ route('products.index') }}">← Go to Products List</a>
</body>
</html>