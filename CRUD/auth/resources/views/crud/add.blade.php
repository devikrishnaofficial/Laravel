<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add User Details</h2>
    <form action="{{url('add')}}" method="post">
        @csrf
    <label for='name'>Name</label>
    <input type="text" name=name>
    <label>Age</label>
    <input type="text" name=age>
    <input type="submit" value="Submit">
    </form>
</body>
</html>