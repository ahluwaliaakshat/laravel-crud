<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Index</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="{{ route('insert')}}" method="POST">
                @csrf
            <label>Name</label>
            <input type="text" name="name" id="">
            <label>Email</label>
            <input type="email" name="email" id="">
            <label>phone</label>
            <input type="number" name="phone" id="" maxlength="10">
            <input type="submit" name="btnsub" value="Insert">
        </form>
        </div>
        <table style="border-width:3px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone number</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
               @foreach($students as $std)
                <tr>
                    <td>{{ $std->id}}</td>
                    <td>{{ $std->name}}</td>
                    <td>{{ $std->email}}</td>
                    <td>{{ $std->phone}}</td>
                    <td><a href="{{ route('fetch',$std->id)}}"><button>Update</button></a></td>
                    <td><a href="{{ route('delete',$std->id)}}"><button>Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>