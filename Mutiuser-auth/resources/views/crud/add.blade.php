<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>ADD DETAILS</h2>
    <form action="{{url('adddetails')}}" method=post>
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Age</label>
        <input type="text" name="age">
        <input class="btn btn-primary" type="submit" value="SUBMIT">

    </form>
</body>
</html>