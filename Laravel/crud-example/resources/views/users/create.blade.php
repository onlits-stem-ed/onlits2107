<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create User</h1>
    <form action="/users" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name"> <br> <br>
        <input type="email" name="email" id="email" placeholder="Email"> <br> <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <button>Save</button>
    </form>
</body>

</html>