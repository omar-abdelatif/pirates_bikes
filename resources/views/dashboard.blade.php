<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
</head>

<body>
    <h1 style="text-align: center; margin-top: 30px;">Super Admin Dashboard Table</h1>
    <table border="1" style="margin: 0 auto; width: 100%" ;>
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
                    <a href="">Edit</a>
                    <a href='{{url("delete/$admin->id")}}'>Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
