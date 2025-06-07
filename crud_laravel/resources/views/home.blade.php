<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>This is a Test page</h1>

    <div align="center">

        <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div style="padding: 10px;">
                <label for="">Nane</label>
                <input type="text" name="name">
            </div>

            <div style="padding: 10px;">
                <label for="">Email</label>
                <input type="text" name="email">
            </div>

            <div style="padding: 10px;">
                <label for="">Image</label>
                <input type="file" name="image">
            </div>

            <div style="padding: 10px;">
                
                <input type="submit" value="submit">
            </div>
        </form>


    </div>
</body>
</html>