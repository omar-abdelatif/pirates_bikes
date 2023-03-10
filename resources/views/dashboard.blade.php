<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
</head>

<body>
    <a style="text-align: center; margin-bottom: 30px;" href="{{"logout"}}">Logout</a>
    <h1 style="text-align: center;">Super Admin Dashboard Table</h1>
    <a href='{{url("signup")}}'>create user</a>
    <table border="1" style="margin: 30px auto 0; width: 100%" ;>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($superAdmin as $admin)
            <tr style="text-align: center; vertical-align: middle;">
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->password}}</td>
                <td>
                    <a href='{{url("edit/$admin->id")}}'>Edit</a>
                    <a href='{{url("delete/$admin->id")}}'>Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
