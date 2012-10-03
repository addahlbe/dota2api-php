<?php
    include 'config.php';

    error_reporting(ERROR_REPORTING);
    ini_set("display_errors", DISPLAY_ERRORS);

    include 'utils/db.php';

    $db = new DB();
    $Items = $db->query("SELECT * FROM items WHERE 1=1");
    $db->close();

    include 'templates/items.php';
?>