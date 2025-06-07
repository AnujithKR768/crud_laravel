<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Students</h1>
    <form action="{{ url('search') }}" method="GET" align="center">
        <input type="search" name="search" placeholder="Search">
        <input type="submit" value="search">
    </form>
    <br><br>
    <table border="1px" align="center">
        <tr>
            <th>Student Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        @foreach ($data as $data )

        <tr>
            <td>{{ $data -> name }}</td>
            <td>{{ $data -> email }}</td>
            <td><img height="150" width="150" src="student/{{ $data -> image }}" alt=""></td>
            <td><a href="{{ url('delete',$data -> id) }}">Delete</a></td>
            <td><a href="{{ url('update',$data -> id) }}">Update</a></td>
        </tr>
        
        @endforeach
        
    </table>
</body>
</html>