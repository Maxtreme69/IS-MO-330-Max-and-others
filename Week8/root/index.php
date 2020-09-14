<?php

// echo "<link rel='stylesheet' type='text/css' href='style.css'>";

mysql_connect('localhost', 'root','usbw');
mysql_select_db('test');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<!-- <script src="main.js"></script> -->
    <title>Drag&Drop</title>
    <h1>SCRUM MASTER</h1>

</head>
<body>

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

			<?php
				$find_comments = mysql_query("SELECT * FROM comment");
				while($row = mysql_fetch_assoc($find_comments))
				{
					$id = $row['id'];
					$comment_name = $row['name'];
					$comment = $row["comment"];

					// echo "$comment_name - $comment<p>";
					echo "Task ". " $id<br>";
					echo "<span>$comment_name</span><br>";
					echo "Description<br>";
					echo "<span>$comment</span><br><br>";
				}
			?>

			<form action="connect.php" method="POST">
				<h4>Activity</h4>
				<input type="text" name="name" value="Activity"><br>
				<h4>Comment</h4>
					<textarea name="comment" cols="50" rows="2">Enter an activity</textarea><br>
				<button class="button-activity" type="submit" value="Send">+</button>
			</form>
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
      

</body>

<script type='text/javascript'>
// alert("Javascript activated");
	// Constant declaration
const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');

// Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const empty of empties) {
  empty.addEventListener('dragover', dragOver);
  empty.addEventListener('dragenter', dragEnter);
  empty.addEventListener('dragleave', dragLeave);
  empty.addEventListener('drop', dragDrop);
}

// Drag Functions
function dragStart() {
  this.className += ' hold';
  setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
  this.className = 'fill';
}

function dragOver(e) {
  e.preventDefault();
}

function dragEnter(e) {
  e.preventDefault();
  this.className += ' hovered';
}

function dragLeave() {
  this.className = 'empty';
}

function dragDrop() {
  this.className = 'empty';
  this.append(fill);
}

</script>
</html>