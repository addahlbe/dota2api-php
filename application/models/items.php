<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $dbc = mysqli_connect('localhost', 'root', 'root', 'dota2api')
    or die('Error connecting to MYSQL server.');

    $query = "SELECT * FROM items WHERE 1=1";

    $result = mysqli_query($dbc, $query);
    $Items = array();
    while($row = mysqli_fetch_array($result)){
        array_push($Items, $row);
    }
    mysqli_close($dbc);
    include 'templates/items.php';
?>