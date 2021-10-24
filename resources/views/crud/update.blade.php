<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Update</title>
</head>
<body>
   
    <form action="{{ route('update',$std->id)}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" id="" value="{{ $std->name }}">
        <label>Email</label>
        <input type="email" name="email" id="" value="{{ $std->email }}">
        <label>Phone</label>
        <input type="number" name="phone" id="" value="{{ $std->phone }}" maxlength="10">
        <input type="submit" value="Update" name="btnupdate">
    </form>
   
</body>
</html>