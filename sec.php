<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="sec.css">
    <script defer src="sec.js"></script>
</head>
<body>
    <div id="form2">
        <h1>Log In</h1>
        <span id="errorMessage2"></span>
        <form id="f22" name="f2"  action="get-data.php" method="POST">
            <p>
                <label>Username</label>
                <input type="text" id="user2" name="username" />
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass2" name="password" />
            </p>
            <p>
                <button id="btn3">Log In</button>
                <a class="sec111" href="index.php">Sign Up</a>
            </p>
        </form>
</body>
</html>
