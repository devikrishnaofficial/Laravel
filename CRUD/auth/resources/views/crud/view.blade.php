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
        @foreach($data as $datas)
        <tr>
            <td>{{$datas->name}}</td>
            <td>{{$datas->age}}</td>
            <td>
                <a href="{{url('edit',$datas->id)}}">Edit</a>
            </td>
            <td>
                <a href="{{url('delete',$datas->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>