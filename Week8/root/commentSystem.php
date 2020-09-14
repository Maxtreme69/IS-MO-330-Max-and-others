


<!DOCTYPE html>
<html lang="en">
<head>
<link rel='stylesheet' type='text/css' href='style.css'>"
<?php

// echo "<link rel='stylesheet' type='text/css' href='style.css'>";

mysql_connect('localhost', 'root','usbw');
mysql_select_db('test');

$find_comments = mysql_query("SELECT * FROM comment");
    while($row = mysql_fetch_assoc($find_comments))
    {
        $comment_name = $row['name'];
        $comment = $row["comment"];

        // echo "$comment_name - $comment<p>";
        echo "$comment_name<br>";
        echo "$comment<br><br>";
    }
?>
    <form action="connect.php" method="POST">
        <input type="text" name="name" value="Your Name"><br>
        <textarea name="comment" cols="50" rows="2">Enter an Activity</textarea><br>
        <input type="submit" value="Comment">
    </form>
  


    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>commentSystem</title>
    <h1>SCRUM MASTER</h1>
</head>
<body> -->

  <table>
    <tr>
      <th class="calendar-th">Monday</th>
      <th class="calendar-th">Tuesday</th>
      <th class="calendar-th">Wednesday</th>
      <th class="calendar-th">Thursday</th>
      <th class="calendar-th">Friday</th>
      <th class="calendar-th">Saturday</th>
      <th class="calendar-th">Sunday</th>
    </tr>
    <tr>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
      <td class="calendar-td"></td>
    </tr>
  </table>

      <table class="tableColumn">
        <tr>
          <th>Back Log</th>
          <th></th>
          <th>To Do</th>
          <th></th>
          <th>In Progress</th>
          <th></th>
          <th>Done</th>
        </tr>
        <tr>
          <td class="empty">
            <div class="fill" draggable="true">
             <!-- <form action="connect.php" method="POST">
            <input type="text" name="name" value="Your Name"><br>
          <textarea name="comment" cols="50" rows="2">Enter a comment</textarea><br>
          <input type="submit" value="Comment">
        </form>          -->
        </div>
          </td>
          <td></td>
          <td class="empty"></td>
          <td></td>
          <td class="empty"></td>
          <td></td>
          <td class="empty"></td>
        </tr>
        <tr>
          <td class="empty"></td>
          <td></td>
          <td class="empty"></td>
          <td></td>
          <td class="empty"></td>
          <td></td>
          <td class="empty"></td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
            <td></td>
            <td class="empty"></td>
        </tr>
      </table>
      

    <script src="main.js"></script>
</body>
</html>
 
