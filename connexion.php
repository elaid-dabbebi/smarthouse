<?php
$connect = @mysql_connect('localhost','root','') or die ("erreur de connexion");
mysql_select_db('house',$connect) or die ("erreur de connexion base");
?>