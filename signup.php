<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="box">
        <h2>Sign Up Form</h2>

        <form action="save.php" method="post">
            <div class="form-group">
                <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter Name">
                
            </div>

            <div class="form-group">
                <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter Email">
                
            </div>

            <div class="form-group">
                <label for="">Phone Number</label>
                    <input type="tel" name="phone" placeholder="Enter Number">
                
            </div>

            <div class="form-group">
                <label for="">City</label>
                    <input type="text" name="city" placeholder="Enter City">
                
            </div>

            <div class="form-group">
                <label for="">Password</label>
                    <input type="password" name="pass" placeholder="Enter password">
                
            </div>

            <input type="submit" value="Sign Up">
            <p>Already have an account? <a href="./login.php">Login </a></p>
            
        </form>
    </div>
    
</body>
</html>