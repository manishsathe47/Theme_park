<?php
    $server_name = "localhost";
    $user_name = "root";
    $user_password = "";
    $db_name = "travel";

    $conn = new mysqli($server_name,$user_name,$user_password);

    $sql = "create database if not exists travel";
    $conn->query($sql);

    $conn = new mysqli($server_name,$user_name,$user_password,$db_name);

    $sql1 = "create table feedback
    (
        srno int not null auto_increment,
        image text,
        placename text,
        placedescription text,
        primary key(srno)
    );";
    $conn->query($sql1);
?>