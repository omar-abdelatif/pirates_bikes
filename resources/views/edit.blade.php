<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pirates Bikes | Edit Page </title>
</head>

<body>
    <form action="{{ url('update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name Here">
        <input type="email" name="email" placeholder="Email Here">
        <input type="password" name="password" placeholder="Password Here">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
