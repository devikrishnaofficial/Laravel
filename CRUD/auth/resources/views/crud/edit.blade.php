<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="{{url('update',$data->id)}}" method="post">
        @csrf
        <input type="text" name='name' value="{{$data->name}}">
        <input type="text" name="age" value="{{$data->age}}">
        <input type="submit" value="update">
    </form>
</body>
</html>