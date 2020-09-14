<?php

$con = mysql_connect('localhost', 'root','');
$db = mysql_select_db('my_database');

if($con){
    echo 'Successfully connected to the database.';
} else {
    die('Error.');
}

if($db){
    echo 'Successfully found the database.';
} else {
    die('Error. Database not found.');
}

?>