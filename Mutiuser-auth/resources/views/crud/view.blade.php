<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->age}}</td>
            <td>
                <a href="{{url('toedit',$data->id)}}">EDIT</a>
            </td>
            <td>
                <a href="">DELETE</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>