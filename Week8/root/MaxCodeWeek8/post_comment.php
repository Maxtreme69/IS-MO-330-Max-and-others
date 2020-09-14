<?php

        // mysql_connect(,"root","")

		// $host = "localhost";
		// $username = "root";
		// $user_pass = "usbw";
		// $database_in_use = "test";

		// // Create a database connection instance
		// $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
		
		// // if there are any values in the table, display them one at a time
		// if ($mysqli->connect_errno) {
		// 	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		// }
		// echo $mysqli->host_info . "\n";

		// $sql = "SELECT id, title, userComment FROM comment";
		// $result = $mysqli->query($sql);

		// // if ($result->num_rows > 0) {
		// // // output data of each row
		// // while($row = $result->fetch_assoc()) {
		// // 	echo "comment id: " . $row["id"]. " - userComment: " . $row["title"]. " " . $row["userComment"]. "<br>";
		// // }
		// // } else {
		// // echo "0 results";
		// // }

        $title = $_POST["title"];
        $userComment = $_POST["userComment"];

        $comment_length = strlen($userComment);

        if(comment_length > 100)
        {
            header("location: index.php?error=1");
        }
        else
        {
            mysql_query("INSERT INTO comment Values('','$title','$userComment')");
            header("location: index.php");
        }

		$mysqli->close();
	?> 