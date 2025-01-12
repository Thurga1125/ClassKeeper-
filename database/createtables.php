<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once $path . "/attendanceapp/database/database.php";

// Create an instance of the Database class
$db = new Database();
$c="create table student_details
(
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar (50)
)";
$c=$db->conn->prepare($c);
try{
    $s->execute();
    echo("<br>student_details created");
}

catch(PDOException $o)
{
    echo("<br>student_details not created");
}

$c="create table course_details
(
    id int auto_increment primary key,
    code varchar(20) unique,
    title varchar (50),
    credit int
)";
$c=$db->conn->prepare($c);
try{
    $s->execute();
    echo("<br>course_details created");
}

catch(PDOException $o)
{
    echo("<br>course_details not created");
}

$c="create table department_details
(
    id int auto_increment primary key,
    username varchar(20) unique,
    name varchar (100),
    password varchar (50)
)";
$c=$db->conn->prepare($c);
try{
    $s->execute();
    echo("<br>department_details created");
}

catch(PDOException $o)
{
    echo("<br>department_details not created");
}

$c="create table session_details
(
    id int auto_increment primary key,
    year int,
    sem varchar (50),
    unique (year,sem)
)";
$c=$db->conn->prepare($c);
try{
    $s->execute();
    echo("<br>session_details created");
}

catch(PDOException $o)
{
    echo("<br>session_details not created");
}

$c="create table session_details
(
    id int auto_increment primary key,
    year int,
    sem varchar (50),
    unique (year,sem)
)";
$c=$db->conn->prepare($c);
try{
    $s->execute();
    echo("<br>session_details created");
}

catch(PDOException $o)
{
    echo("<br>session_details not created");
}
?>
