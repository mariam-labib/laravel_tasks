<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
        .navbar { background: #333; color: #fff; padding: 10px 20px; display: flex; justify-content: space-between; }
        .navbar a { color: #fff; text-decoration: none; margin-left: 15px; }
        .container { padding: 20px; max-width: 600px; margin: 20px auto; background: #fff; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; }
        th { width: 30%; background: #f8f9fa; text-align: left; }
        .btn { background: #6c757d; color: white; padding: 6px 12px; text-decoration: none; border-radius: 3px; display: inline-block; margin-top: 15px; font-size: 13px; }
    </style>
</head>
<body>
    <div class="navbar">
        <span>Laravel App</span>
        <div><a href="/users">Users</a> <a href="/courses">Courses</a></div>
    </div>
    <div class="container">
        <h2>Course Details</h2>
        <table>
            <tr><th>ID</th><td>{{ $course['id'] }}</td></tr>
            <tr><th>Name</th><td>{{ $course['name'] }}</td></tr>
            <tr><th>Hours</th><td>{{ $course['hours'] }}</td></tr>
            <tr><th>Instructor</th><td>{{ $course['instructor'] }}</td></tr>
        </table>
        <a href="/courses" class="btn">Back to Courses</a>
    </div>
</body>
</html>