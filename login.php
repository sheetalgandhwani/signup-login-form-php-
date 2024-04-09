<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="box">
        <h2>Login Form</h2>
        <form action="log.php" method="post">

            <div class="form-group">
                <label for="">Username</label>
                <input type="email" name="username" id="" placeholder="Enter username">
            </div>
            

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="passw" id="" placeholder="Enter password">
            </div>

            

            <input type="submit" value="Login">
            <P> Don't have an account? <a href="./signup.php">Sign Up</a></p>
             
            

          </form>
    </div>
    
</body>
</html>