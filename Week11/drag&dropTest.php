
<?php

// echo "<link rel='stylesheet' type='text/css' href='style.css'>";

mysql_connect('localhost', 'root','usbw');
mysql_select_db('test');

?>

      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		background-color: #FFCE00;
		font-family: 'Roboto', Helvetica, sans-serif;
	}

	.app {
		display: flex;
		flex-flow: column;

		width: 100vw;
		height: 100vh;
	}

	header {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 60px;
	}

	.fill {
    /* background-image: url(stick-note-crop.png); */
    
  }
  

	.lists {
		display: flex;
		flex: 1;
		width: 100%;
		overflow-x: scroll;
	}

	.lists .list {
		/*position: relative;
	    height: 200px;
	    width: 200px;
	    cursor: pointer;
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    background-color: rgb(245 233 139);
	    display: block;
	    overflow: auto;
	    overflow-x: hidden; //horizontal;*/

		display: flex;
		flex-flow: column;
		flex: 1;

		width: 100%;
		min-width: 200px;
		max-width: 350px;
		height: 100%;
		min-height: 150px;

		background-color: rgba(0, 0, 0, 0.1);
		margin: 0 15px;
		padding: 8px;
		transition: all 0.2s linear;_
	}

	.lists .list .list-item {
/*		background-color: #F3F3F3;
*/	    background-color: rgb(245 233 139);
		border-radius: 8px;
		padding: 15px 20px;
		text-align: center;
		margin: 4px 0px;
		height: 200px;
	}

	#empty {
		height: 200px;
		width: 100%;
		min-width: 200px;
		max-width: 350px;
	}
</style>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 -->

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <title>Drag n Drop</title>
<!--   <link rel="stylesheet" href="style.css"></link>
 -->
</head>

<body>

	<div class="app">
		<header>
			<h1>Drag n Drop</h1>
		</header>
		<div class="lists">
	         <div class="list">Backlog
	          	<div class="list-item" draggable="true">



	          	</div>
	          	<div class="list-item" draggable="true">

				        
					  
	          	</div>
	          	<div class="list-item" draggable="true">List Item 3</div>
	            <div class="list-item" draggable="true">List Item 3</div>
	          	<div class="list-item" draggable="true">List Item 3</div>
	          	<div class="list-item" draggable="true">List Item 3</div>

	         </div>
	          	<div class="list">To Do

	          		<div class="list-item" draggable="true">List Item 3</div>
	          		<div id="empty" draggable="true">List Item 3</div>



	          	
				<input type="text">
				<button>Copy</button>
				<p></p>
				<span  draggable="true">

	          	</div>

	          	<div class="list">In Progress</div>
	          	<div class="list">Complete</div>
	          </div>
	      </div>


	    



</body>



</html>

<script>
 
 var clickCount = 0;

	$('button').click(function() {
	  var html = $('input').val();
	  var classname = 'list-item';
	  $('<div>').addClass(classname).html(html).appendTo('span');
	  $('<div>').addDraggable(true).html(html).appendTo('span');

	});

function myFunction() {
  var element = document.getElementById("empty");
  element.classList.toggle("list-item");
}

</script>

<script type='text/javascript'>

const list_items = document.querySelectorAll('.list-item');
const lists 	 = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) {
	const item = list_items[i];

	item.addEventListener('dragstart', function () {
		draggedItem = item;
		setTimeout (function () {
			item.style.display = 'none';
		}, 0)
	});

	item.addEventListener('dragend', function () {
		setTimeout(function () {
			draggedItem.style.display = 'block';
			draggedItem = null;
		}, 0);
	})

	for (let j = 0; j < lists.length; j ++) {
		const list = lists[j];

		list.addEventListener('dragover', function (e) {
			e.preventDefault();
		});

		list.addEventListener('dragenter', function(e) {
			e.preventDefault();
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
		});

		list.addEventListener('dragleave', function(e) {
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});

		list.addEventListener('drop', function (e) {
			console.log('drop');
			this.append(draggedItem);
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});
	}
}
</script>