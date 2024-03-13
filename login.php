<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<b><h1 align="center">Login</h1></b>
<?php
    include('conn.php');
    if(isset($_POST['submit'])) {   
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $check = $conn->query("SELECT * FROM register WHERE username= '$username' AND password='$password'"); 
        $row = $check->fetch_assoc();
        if($row > 0)
        {
            echo '<script type="text/javascript">
                alert("Login Successful");
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
                alert("Incorrect username or password");
            </script>';
        }
    }
?>
    <div class="login">
        
        <div class="form-label">
            <form method="post">
            <center>
                <label name="username">Username</label>
                <input type="text" name="username" placeholder="Username"><br/><br/>
                <label name="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <br/><br/><input type="submit" name="submit" value="LOGIN"> <!-- Added name attribute -->
                <small><br/>   <br/> New user?..<a href="register.php">Register</a></small>
            </form>
            </center>
        </div>
    </div>
</body>
</html>