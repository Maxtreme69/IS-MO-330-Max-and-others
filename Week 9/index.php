<?php

// echo "<link rel='stylesheet' type='text/css' href='style.css'>";

mysql_connect('localhost', 'root','usbw');
mysql_select_db('test');

?>

<style>
  body {
      background: red;
  }

  
h1 {
  position: relative;
  font: 100px Helvetica, Sans-Serif;
  letter-spacing: -5px;
  color: rgb(226, 47, 47); 
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

h4, p, .center{
  text-align: center;
  font-family: 'Indie Flower', cursive;
  margin: 0px;
}

form, input{
  background-color: rgb(245 233 139);
  border: none;
  width: 200px;
  text-align: center;
  font-family: 'Indie Flower', cursive;
}

textarea{
  background-color: rgb(245 233 139);
  border: none;
  width: 190px;
  text-align: center;
  font-family: 'Indie Flower', cursive;
}

/* SCROLL BAR */
/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_custom_scrollbar */

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background-color: rgb(245 233 139);
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #bbbbbb;
  background: rgba(0, 0, 0, 0.15);
  border-radius: 5px; 
  height: 50px; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.button-activity{
  /* width: 75px;
  height: 35px; */
  position: center;
  margin-left: 84%;
  margin-bottom: 5px;
  border-radius: 50%;
}
  
  .fill {
    /* background-image: url(stick-note-crop.png); */
    position: relative;
    height: 200px;
    width: 200px;
    cursor: pointer;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-color: rgb(245 233 139);
    display: block;
    overflow: auto;
    overflow-x: hidden; //horizontal;
  }
  
  .hold {
    border: solid 5px #ccc;
  }
  
  .empty {
    display: inline-block;
    height: 200px;
    width: 200px;
    border: solid 3px lightgray;
    background: white;
    border: 0px;
  }
  
  .hovered {
    background: #f4f4f4;
    border-style: dashed;
  }

 .calendar-th {
    margin: 0px;
    border-spacing: 0px;
    width: 90px; 
    height: 25px; 
    background-color: rgb(61, 148, 248) !important;
  }

  .calendar-td {
    margin: 0px;
    padding: 100px;
    border-spacing: 0px;
    width: 60px; 
    background-color: white !important;
    border: solid black;
  }

  #blue{
    background-color: rgb(61, 148, 248);
  }

  /* .calendar{
    margin: 0px;
    padding: 100px;
    border-spacing: 0px;
    width: 150px; 
    
  } */

  table{
    margin: 0px;
    padding-left: 150px;
    padding-right: 150px;
    padding-bottom: 100px;
    border-spacing: 0px;
  }

  th {
    background-color: rgb(61, 148, 248);
    margin: 0px;
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
  }

  tr {
    background-color: white;
    margin: 0px;
    padding: 0px;
  }

  td:nth-child(2), td:nth-child(4), td:nth-child(6), th:nth-child(2), th:nth-child(4), th:nth-child(6) { 
    width: 150px; 
    background: lightgray;
  }

  .tableColumn{
    padding-left: 23%;
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
  }



  /*Calendar*/

 .MultiCarousel { 
  float: left; 
  overflow: hidden; 
  padding: 15px; 
  width: 100%; 
  position:relative; 
  }

.MultiCarousel .MultiCarousel-inner { 
  transition: 1s ease all; 
  float: left; 
  }
.MultiCarousel .MultiCarousel-inner .item { 
  float: left;
  }
.MultiCarousel .MultiCarousel-inner .item > div { 
  text-align: center;
    /* padding: 10px; */
    margin: 10px;
    background: #f1f1f1;
    color: #666;
    padding-bottom: 10px;
  }
.MultiCarousel .leftLst, .MultiCarousel .rightLst { 
  position:absolute; 
  border-radius:50%;
  top:calc(50% - 20px); 
  }
.MultiCarousel .leftLst { left:0; }
.MultiCarousel .rightLst { right:0; }
.MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { 
  pointer-events: none; 
  background:#ccc; 
  }

.day{
  background-color: red;
    color: white;
  }

.item:hover {
  color: rgb(155,155,155, 0.3);
  opacity: 0.5;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--   <script src="main.js"></script>
 -->  




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


      <script src="calendarTest2/multi.js"></script>

<link rel="stylesheet" type="text/css" href="main.css">



<!-- 	<script src="main.js"></script>
 --><title>Drag&Drop</title>
    <h1>SCRUM MASTER</h1>

</head>
<body>

<div class="container">
  <div class="row">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Monday</p>
                        <p>1st</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Tuesday</p>
                        <p>2nd</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Wednesday</p>
                        <p>3rd</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Thursday</p>
                        <p>4th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Friday</p>
                        <p>5th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Saturday</p>
                        <p>6th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Sunday</p>
                        <p>7th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Monday</p>
                        <p>8th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Tuesday</p>
                        <p>9th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Wednesday</p>
                        <p>10th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Thursday</p>
                        <p>11th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Friday</p>
                        <p>12th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Saturday</p>
                        <p>13th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Sunday</p>
                        <p>14th</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead day">Monday</p>
                        <p>15</p>
                        <p>October</p>
                        <p>2020</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
 

<!--   <table>
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
  </table> -->

      <table class="tableColumn container">
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