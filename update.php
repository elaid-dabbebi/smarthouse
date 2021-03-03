<?php
    include("connexion.php");
    if(isset($_GET['object']) and isset($_GET['value'])){
        mysql_query("UPDATE etats SET etat='".$_GET['value']."' WHERE objet='".$_GET['object']."'");
    }
?>