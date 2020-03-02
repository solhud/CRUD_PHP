<?php

    // coonection mysql
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "Tukang Koding";

    // Create connection
    $conn = mysql_connect($servername, $username, $password);
    $select = mysql_select_db($db, $conn );
    // Check connection
    if ($conn) {
    die("Connection berhasil ");
    } 
    echo "Connected failed";


?>