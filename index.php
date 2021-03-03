<?php
    session_start();
    if(isset($_SESSION['conn'])){
        if($_SESSION['conn']==true){
            include("connexion.php");
        }else{
            header("Location:login.php");
        }
    }else{
        header("Location:login.php");
    }
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart House</title>
</head>

<body>
    <div>
        <img id="imghead" src="./img/robot.PNG" alt="">
    </div>
    <span style="color: white;">
        Lights :</span>
    <div class="lightdoor">

        <div class="lightdoor1">
        <span class="room">Saloon</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='lsaloon'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
            <span class="room">Bedroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='lbedroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Bathroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='lbathroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Kitchen</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='lkitchen'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Hallway</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='lhallway'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>


    </div>
    <span style="color: white;">
        Doors :</span>
    <div class="lightdoor">

    <div class="lightdoor1">
        <span class="room">House</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='dhouse'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Saloon</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='dsaloon'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>



        <div class="lightdoor1">
        <span class="room">Bedroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='dbedroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Bathroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='dbathroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor1">
        <span class="room">Kitchen</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='dkitchen'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>
    </div>

    <span style="color: white;">
        Windows :</span>
    <div class="lightdoor">

        <div class="lightdoor2">
        <span class="room">Saloon</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='wsaloon'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>



        <div class="lightdoor2">
        <span class="room">Bedroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='wbedroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor2">
        <span class="room">Bathroom</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='wbathroom'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>

        <div class="lightdoor2">
        <span class="room">Kitchen</span>
            <hr style="width: 99%;color :white;">
        <?php
        $result = mysql_query("SELECT * FROM etats WHERE objet='wkitchen'");
        $row = mysql_fetch_assoc($result);
        if($row['etat']==0){
            echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }else{
            echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:35px;'></button></form>";
        }
        ?>   
        </div>
    </div>


    <div class="fan">
        <div class="fan1">
            <span style="color: white;">
                Temp. :</span>
            <hr style="width: 99%;color :white;">
            <?php
            $result = mysql_query("SELECT * FROM etats WHERE objet='temp'");
            $row = mysql_fetch_assoc($result);
            echo "<span style='color: white; font-size: 22;'>".$row['etat']." °C</span>";
            ?>
        </div>
        <div class="fan1">
            <span style="color: white;">
                Fan :</span>
            <hr style="width: 99%;color :white;">
            <?php
                $result = mysql_query("SELECT * FROM etats WHERE objet='fan'");
                $row = mysql_fetch_assoc($result);
                if($row['etat']==0){
                    echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:55px;'></button></form>";
                }else{
                    echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:55px;'></button></form>";
                }
                ?>
        </div>
    </div>
    <div class="fan">
        <div class="fan1">
            <span style="color: white;">
                Humidity :</span>
            <hr style="width: 99%;color :white;">
            <?php
                $result = mysql_query("SELECT * FROM etats WHERE objet='humidity'");
                $row = mysql_fetch_assoc($result);
                echo "<span style='color: white; font-size: 22;'>".$row['etat']." %</span>";
            ?>
        </div>
        <div class="fan1">
            <span style="color: white;">
                Electricity :</span>
            <hr style="width: 99%;color :white;">
            <?php
                $result = mysql_query("SELECT * FROM etats WHERE objet='electricity'");
                $row = mysql_fetch_assoc($result);
                if($row['etat']==0){
                    echo "<form action='desactiver.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/off.PNG' alt='' style='border-radius: 50%; width:55px;'></button></form>";
                }else{
                    echo "<form action='activer.php' method='GET'><input name='object' type='hidden' value='".$row['objet']."'><button type='submit' style='background: none;border : 0px;'><img src='./img/on.PNG' alt='' style='border-radius: 50%; width:55px;'></button></form>";
                }
                ?>
        </div>
    </div>
    <footer>
        <a href="index.php"><img id="imgabout" src="./img/ref.PNG" alt=""></a>
        <a href="about.php"><img id="imgabout" src="./img/about2.png" alt=""></a>
        <a href="logout.php"><img id="imgabout" src="./img/logout.PNG" alt=""></a>
        <br> Created By :<br> Club Robotique ENIT - 2021
    </footer>
</body>

</html>