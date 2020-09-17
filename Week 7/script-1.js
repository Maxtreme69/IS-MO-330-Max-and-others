  // Your web app's Firebase configuration
  var firebaseConfig = {
      apiKey: "AIzaSyD4c8phHe-a5-qP0S1vysQFSxP6exmYrl0",
      authDomain: "bis-assignment.firebaseapp.com",
      databaseURL: "https://bis-assignment.firebaseio.com",
      projectId: "bis-assignment",
      storageBucket: "bis-assignment.appspot.com",
      messagingSenderId: "1044946292330",
      appId: "1:1044946292330:web:eb88d4d34b8475f9410413"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  document.getElementById("add-task").addEventListener('click', function() {
      let testValue = document.getElementById("task-value").value;

      console.log(testValue);

      if (testValue) {
          addTask(testValue);
      } else {
          alert("NOOOO , You must have an task-input prior to creating a card!");
      }
      document.getElementById("task-value").value = "";

  })


  const addTask = (testValue) => {


      let task = document.createElement("li");
      task.classList.add('task');
      task.classList.add('fill');
      task.draggable = true;
      // console.log(task);
      task.addEventListener('dragstart', dragStart);
      task.addEventListener('dragend', dragEnd);

      let textContent = document.createElement('div');
      textContent.classList.add("task-content");
      // taskContent.textContent = testValue;
      // taskContent.droppable = false;

      let textNode = document.createTextNode(testValue);
      textContent.appendChild(textNode);


      let trash = document.createElement('div');
      trash.classList.add('trash');
      trash.innerText = "X";
      trash.addEventListener('click', removeTask)

      task.appendChild(textContent);
      task.appendChild(trash);

      let tasks = document.getElementById("tasks-added");
      tasks.prepend(task);


  }


  const removeTask = (event) => {
      // let tasks = event.target.parentNode.parentNode;
      // let task = event.target.parentNode;
      // tasks.removeChild(task)
      let task = event.target.parentNode;
      task.remove();

  };

  let taskz;

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
      event.preventDefault();
      console.log("OVER");
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

          //   const exit = document.createElement("button");
          //   //   exit.className = "Option-button";
          //   exit.style.border = "solid black 2px";
          //   exit.textContent = "x";

          //   newOption.appendChild(exit);

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