<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="css/navbar.css">
    </head>
    <body>   
        <?php include "navbar.php" ?>
        <h1>Log In</h1>
        <form onsubmit="submitForm()" method="POST" action="login.php">
            <label for="netid">netid: </label>
            <input type="text" id="netid" name="netid">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>