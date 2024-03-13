<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <?php
    include('conn.php');
    if(isset($_POST['submit'])) {   
        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $password = $_POST['password'];
        $cpassword = $_POST['confpassword'];
        echo $name;
        if($password==$cpassword){
            $create = $conn->query("create table if not exists register(id int(10) primary key auto_increment, username varchar(40), age int, password varchar(40))");
            $insert = $conn->query("insert into register(username, age, password) values('$name', '$age', '$password')");
        }
    }
    ?>
<b><h1 align="center" style="margin-top: 50px;">Register</h1></b>
    <div class="login">
        
        <div class="form-label">
            <form method="post">
            <center>
                <label name="name">Name</label>
                <input type="text" name="name" placeholder="Your name"><br/><br/>
                <label name="age">Age</label>
                <input type="text" name="age" placeholder="Your age">
                <label name="password">Password</label>
                <input type="password" name="password" placeholder="Your password">
                <label name="confpassword">Confirm</label>
                <input type="password" name="confpassword" placeholder="Confirm password">
                <!-- <label name="type">Type</label> -->
                    <input type="submit" name="submit" value="REGISTER"> 
                <small><br/>   <br/> Already registered?..<a href="login.php">Login</a></small>
            </form>
            </center>
        </div>
    </div>
</body>
</html>