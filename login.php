<?php
    if(isset($_POST['username'])){
        include("connexion.php");
        session_start();
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $result=mysql_query("SELECT * from users where username='$username' and password='$pass'");
        $userinfo=mysql_fetch_assoc($result);
        mysql_close($connect);
        if(!empty($username) and !empty($pass)){
            if(mysql_num_rows($result)==1){
                $_SESSION['conn']=true;
                header("Location:index.php");
            }
        }
    }
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <img id="imghead" src="./img/robot.PNG" alt="">
    </div><br>
    <?php
    if(isset($_POST['username'])){
        include("connexion.php");
        $username=$_POST['username'];
        $pass=$_POST['password'];
        $result=mysql_query("SELECT * from users where username='$username' and password='$pass'");
        mysql_close($connect);
        if(empty($username) or empty($pass)){
            echo "<div style='color : white;font-weight : bold;text-align: center;'>You must enter username and password! </div>";
        }
        else{
            if(mysql_num_rows($result)==0){
                echo "<div style='color : white;font-weight : bold;text-align: center;'>Wrong username or password </div>";
            }
        }
    }
?>
    <br>
    <div class="logdiv">
        <form action="login.php" method="post">
            <label for="username">Username :</label>
            <input class="in" type="text" name="username" id=""><br><br>
            <label for="password">Password :</label>
            <input class="in" type="password" name="password" id=""><br><br>
            <input class="sub" type="submit" value="Login">
        </form>
    </div><br><br><br><br>
    <footer> Created By :<br> Club Robotique ENIT - 2021</footer>
</body>

</html>