<?php
class DB {
    private $dbc = NULL;

    function __construct() {
       $this->dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
       or die('Error connecting to MYSQL server.');
    }

    function query($query) {
        $result = mysqli_query($this->dbc, $query) or die("Error: " . mysqli_error($this->dbc));
        $returned = array();
        while($row = mysqli_fetch_array($result)){
            array_push($returned, $row);
        }
        return $returned;
    }

    function close() {
        mysqli_close($this->dbc);
    }
}
?>