

  // <-- Ready Data --------------->
  // var nameV 
  // var rollV 
  // var secV 
  // var genV

  // function Ready() {
  //   nameV = document.getElementById('namebox').value;
  //   rollV = document.getElementById('rollbox').value;
  //   secV = document.getElementById('secbox').value;
  //   genV = document.getElementById('genbox').value;
  // }

  
  // // <-- Insert Process --------------->

  // document.getElementById('insert').onclick = function(){
  //   Ready();
  //   firebase.database().ref('student/'+rollV).set({
  //     NameOfStudent: nameV,
  //     rollNo: rollV,
  //     section: secV,
  //     Gender: genV
  //   });
  // }


  






  document.getElementById("add-task").addEventListener('click', function() {
      let testValue = document.getElementById("task-value").value;

      console.log(testValue);

      if (testValue) {
          addTask(testValue);
      } else {
          alert("Please select an activity to add");
      }
      document.getElementById("task-value").value = "";
  })


  const addTask = (testValue) => {

      let task = document.createElement("li");
      task.classList.add('task');
      task.classList.add('fill');
      task.draggable = true;
      task.addEventListener('dragstart', dragStart);
      task.addEventListener('dragend', dragEnd);

      let textContent = document.createElement('div');
      textContent.classList.add("task-content");
  
      let trash = document.createElement('div');
      trash.innerText = "X";
      trash.classList.add('trash');
      trash.addEventListener('click', removeTask)

      let window = document.createElement('button');
      window.innerText = "add";
      window.classList.add('addInput');
      window.id = "input";
      window.addEventListener('click', input2);

      task.id = "input2";
      // task.id = "input";


      let textNode = document.createTextNode(testValue);
      textContent.appendChild(textNode);

      task.appendChild(textContent);
      task.appendChild(trash);

      task.appendChild(textContent);
      task.appendChild(window);

      let tasks = document.getElementById("tasks-added");
      tasks.prepend(task);
  }

  const removeTask = (event) => {
      let task = event.target.parentNode;
      task.remove();
  };

   const input = (event) => {
        let txtNewInputBox = document.createElement('li');
        txtNewInputBox.innerHTML = "<input type='text' id='newInputBox'>";    
        document.getElementById("input2").appendChild(txtNewInputBox);
  };

    const input2 = (event) => {
        let txtNewInputBox = document.createElement('li');
        let txtNewInputBox2 = document.createElement('li');
        txtNewInputBox.innerHTML = "<input id='delete' type='text' class='form-control' name='courses[]' placeholder='Enter Task Description'>";    
        document.getElementById("input2").appendChild(txtNewInputBox);

        txtNewInputBox2.innerHTML = "<button onclick='myFunction()' class='btn btn-danger' data-inline='true' id='delete2'>Remove</button><button onclick='submit()' data-inline='true' class='btn btn-success' id='delete3'>Submit</button>"; 
        document.getElementById("input2").appendChild(txtNewInputBox2);   

        // txtNewInputBox2.innerHTML = "<button onclick='submit()' class='btn btn-success' id='submit'>Submit</button>"; 
        // document.getElementById("input3").appendChild(txtNewInputBox2);   
  };

  var input = document.getElementById("delete");
  // var submit = document.getElementById("delete3");

function submit() {
      var myobj = document.getElementById("delete3");
       alert("You clicked the submit button"); 
       var firebaseRef = firebase.database().ref();

       firebaseRef.child("Text").set("Some Value");
}


function myFunction() {
      var myobj = document.getElementById("delete");
       myobj.remove();
       var myobj2 = document.getElementById("delete2");
       myobj2.remove();  
       var myobj3 = document.getElementById("delete3");
       myobj3.remove();  
}

  const removeInput = (event) => {
     var myobj = document.getElementById("remove");
     myobj.remove();
  }

  // This event is fired when you start dragging the note
  const dragStart = (Event) => {
      Event.target.classList += ' hold';

      taskz = Event.target;
      setTimeout(() => Event.target.className = "invisible", 0);
      let yo = document.querySelectorAll("columnn dropzone");
      yo.classList += ' hovered';
  }

  // This event is fired when you stop dragging the note
  const dragEnd = (Event) => {
      Event.target.className = 'task';

  }

  const dropzones = document.querySelectorAll(".dropzone");
  console.log(dropzones);

  //Is activated when you drag over the coloumn (Only applies for less than a sec)  
  const dragEnter = (event) => {
      event.preventDefault();
      console.log("ENTER");
      if (event.target.className === "column dropzone") {
          event.target.className += ' hovered';

      }
  };
  // Is activated when you drag over and so long as your still hovered over the coloumn
  const dragOver = (event) => {
      // $('.column dropzone').css('background', 'blue'); 
      event.preventDefault();
      console.log("OVER");
      this.style.background=red;
  }

  // Activate when you leave the coloumn
  const dragLeave = (event) => {
      event.preventDefault();
      console.log("LEAVE");
  }

  // Only applies when you drop a note onto the coloumn and hence append the note onto the coloumn (List)
  const dragDrop = (event) => {
      console.log(event.target);
      // if (event.target.className === "column") {
      event.target.append(taskz);
  }

  // This for loop iterates over all oof the coloumns and listens for whenever the 4 events are fired
  for (const dropzone of dropzones) {
      dropzone.addEventListener('dragenter', dragEnter);
      dropzone.addEventListener('dragover', dragOver);
      dropzone.addEventListener('dragleave', dragLeave);
      dropzone.addEventListener('drop', dragDrop);
  }

  document.getElementById("buttonn").addEventListener('click', doSomething);

  function doSomething() {
      document.querySelector(".bg-modal").style.display = 'flex';
  }

  document.querySelector('.close').addEventListener('click', close);

  function close() {
      document.querySelector(".bg-modal").style.display = 'none';
      document.querySelector(".name").value = "";
      document.querySelector(".email").value = "";
  }


  const subButton = document.querySelector(".bt").addEventListener('click', addNewMember);

  function addNewMember() {
      const nameInp = document.querySelector(".name").value;
      const emailImp = document.querySelector(".email").value;
      if (nameInp) {

          const select = document.querySelector("#select-tab");

          const newOption = document.createElement("option");
          newOption.textContent = nameInp;

          select.appendChild(newOption);
          document.querySelector(".bg-modal").style.display = 'none';

          document.querySelector(".name").value = "";
          document.querySelector(".email").value = "";

          firebase.database().ref('Members').push({
              Member: nameInp,
              Email: emailImp
          });

      } else {
          alert("New Member must atleast have a name!");
      }
  }

// Changes Card Color
  function greenCard() {
    $('.task').css('background-color', 'green'); 
  }

  function yellowCard() {
    $('.task').css('background', 'yellow'); 
  }

  function blueCard() {
    $('.task').css('background', 'blue'); 
  }

  function redCard() {
    $('.task').css('background', 'red'); 
  }

    function purpleCard() {
    $('.task').css('background', 'purple'); 
  }


// Changes Background Color
  function greenBackground() {
    $('body').css('background', 'green'); 
  }

  function yellowBackground() {
    $('body').css('background', 'yellow'); 
  }

  function blueBackground() {
    $('body').css('background', 'blue'); 
  }

  function redBackground() {
    $('body').css('background', 'red'); 
  }

    function purpleBackground() {
    $('body').css('background', 'purple'); 
  }