<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login system</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>

<body>
    <div id="form1">
        <h1>Sign up</h1>
        <span id="errorMessage"></span>
        <form name="f1" action="insert-data.php" method="POST">
            <p>
                <label>Username</label>
                <input type="text" id="user" name="user" >
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass" name="pass" >
            </p>
            <p class="twoBtn">
                <input type="submit" id="btn" name="submit" value="Sign up" />
                <span id="h2so4"><a class="secto" href="sec.php">Log In</a></span>
            </p>
            
        </form>
    </div>
    </form>
    </div>
</body>

</html>