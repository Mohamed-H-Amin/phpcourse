<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="registration.php" method="get">
        User Name : <input type="text" name="username" id="">
        <br>
        Password : <input type="password" name="password" id="">
        <br>
        <button type="submit">Login by Get</button>
    </form>
    <h2>Registration Form</h2>
    <form action="registration.php" method="post">
        User Name : <input type="text" name="username" id="">
        <br>
        Password : <input type="password" name="password" id="">
        <br>
        <button type="submit">Login by post</button>
    </form>
</body>
</html>