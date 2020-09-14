<?php

// $con = mysql_connect('localhost', 'root','usbw');
// $db = mysql_select_db('test');

// if($con){
//     echo 'Successfully connected to the database.';
// } else {
//     die('Error.');
// }

// if($db){
//     echo 'Successfully found the database.';
// } else {
//     die('Error. Database not found.');
// }

mysql_connect('localhost', 'root','usbw');
mysql_select_db('test');

$name = $_POST["name"];
$comment = $_POST["comment"];

$comment_length = strlen($comment);

    if($comment_length > 100)
{
    header("location: commentSystem.php?error=1");
}
    else
{
    mysql_query("INSERT INTO comment VALUES('','$name','$comment')");
    header("location: index.php");
}

?>