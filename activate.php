<?php
    include("connexion.php");
    if(isset($_GET['object'])){
        mysql_query("UPDATE etats SET etat='1' WHERE objet='".$_GET['object']."'");
    }      
?>