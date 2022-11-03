<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_login';

    $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            die("Connection failed:" . mysqil_connect_error());
        }

