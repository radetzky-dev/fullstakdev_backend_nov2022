<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PDF File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<header>
    <h3 class="text-center modal-title" >Blue view</h3>
</header>
<div class="container-fluid-sm text-center">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Password</td>
                <td>Creato il</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $key => $students)
                <tr>
                    <td>{{ $students['id'] }}</td>
                    <td>{{ $students['name'] }}</td>
                    <td>{{ $students['email'] }}</td>
                    <td>{{ $students['phone'] }}</td>
                    <td>{{ $students['password'] }}</td>
                    <td>{{ $students['created_at'] }}</td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>

</html>
