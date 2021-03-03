<?php
    session_start();
    if(isset($_SESSION['conn'])){
        if($_SESSION['conn']==true){
            include("connexion.php");
            if(isset($_GET['object'])){
                mysql_query("UPDATE etats SET etat='0' WHERE objet='".$_GET['object']."'");
            }
            header("Location:index.php");
        }else{
            header("Location:login.php");
        }
    }else{
        header("Location:login.php");
    }
?>