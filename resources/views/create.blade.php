<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirates Bikes | SignUp</title>
</head>

<body>
    <p>
        have an account
        <a href="{{url('signin')}}">Login</a>
    </p>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    @endif
    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name Plz">
        <input type="email" name="email" placeholder="Email Plz">
        <input type="password" name="password" placeholder="Password Plz">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
