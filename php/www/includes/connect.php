<?php
    function CreateQuery($query)
    {
        $host = "localhost";
        $username = "root2";
        $password = "qwerty";
        $dbname = "bookmarkproject";

        $con = mysqli_connect($host, $username, $password, $dbname);

        if (!$con)
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            echo "Please check the connection parameters in includes\connect.php";
        }

        return mysqli_query($con, $query);
    }