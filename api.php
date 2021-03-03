<?php
    include("connexion.php");
    header("Content-Type: application/json");
    $res = mysql_query("SELECT * FROM etats");
    $info = array();
    while($row = mysql_fetch_array($res, MYSQL_NUM)){
        $info[$row[1]] = $row[2];
    }
    echo json_encode($info);
?>