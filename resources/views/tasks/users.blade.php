<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
        .navbar { background: #333; color: #fff; padding: 10px 20px; display: flex; justify-content: space-between; }
        .navbar a { color: #fff; text-decoration: none; margin-left: 15px; }
        .container { padding: 20px; max-width: 900px; margin: 20px auto; background: #fff; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; }
        .btn { background: #007bff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; font-size: 12px; }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Laravel App</span>
        <div>
            <a href="/users">Users</a>
            <a href="/courses">Courses</a>
        </div>
    </div>
    <div class="container">
        <h2>Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Address</th><th>Age</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['address'] }}</td>
                    <td>{{ $user['age'] }}</td>
                    <td><a href="/users/{{ $user['id'] }}" class="btn">Show</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>