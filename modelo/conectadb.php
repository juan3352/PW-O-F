<?php

class conectadb {


    public static function dbmysql() {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = '';
        $db_db = 'phpsql';
        //echo '10';
        $mysqli = @new mysqli(
                        $db_host,
                        $db_user,
                        $db_password,
                        $db_db);
        if ($mysqli->connect_error) {
            echo 'Errno: ' . $mysqli->connect_errno;
            echo '<br>';
            echo 'Error: ' . $mysqli->connect_error;
            exit();
        } else {
            //echo 'conectado';
        }
        return $mysqli;
    }

}
?>

