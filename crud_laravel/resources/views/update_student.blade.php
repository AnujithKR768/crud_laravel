<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update_data',$student -> id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>

            <label for="">Name</label>
            <input type="text" name="name" value="{{ $student -> name }}">

        </div>
        
        <div>

            <label for="">Email</label>
            <input type="text" name="email" value="{{ $student -> email }}">

        </div>

        <div>

            <label for="">Image</label>
            <img height="120" width="120" src="/student/{{ $student -> image }}" alt="">

        </div>

        <div>

            <label for="">New Image</label>
            <input type="file" name="image">

        </div>

        <div>
            <input type="submit" value="submit">
        </div>


    </form>
</body>
</html>