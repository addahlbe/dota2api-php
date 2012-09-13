<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $items = array(
        "item #1"=> array(
            "name"=> "item #1",
            "cost"=> "20"
        ),
        "item #2"=> array(
            "name"=> "item #2",
            "cost"=> "50"
        ),
        "item #3"=> array(
            "name"=> "item #3",
            "cost"=> "10"
        ),
        "item #4"=> array(
            "name"=> "item #4",
            "cost"=> "60"
        ),
        "item #5"=> array(
            "name"=> "item #5",
            "cost"=> "20"
        ),
    );

    include 'templates/items.php';
?>