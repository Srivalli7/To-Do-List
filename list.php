<html>
	  <body>

<?php

    include 'db_connection.php';
    include 'db.php';
	include 'header.php';
    
    if (!$_COOKIE['islogged']){
        header("location:login.php");
    }
    ?>
	 <div class="container">
	
	<p class="text-center" style="font-size:25px;">To-Do List Web App</p>
	<?php
    echo "Welcome, " . $_COOKIE['login'] . "<br/>";
    echo "Below you may find your TO-DO list :)";
    echo "<br/><br/>To Do list:<br/><br/>";
    getTodoItems($_COOKIE['my_id']);
    

    if(isset($_POST['submit_description'])){
        addTodoItem($_COOKIE['my_id'],$_POST['description']);
        header("Refresh:0");        
    }
    
    if(isset($_POST['check_list'])){
        foreach($_POST['check_list'] as $selected){
            deleteTodoItem($_COOKIE['my_id'], $selected);
        }
        header("Refresh:0");
    }
?>

<?php include 'header.php';
include 'db_connection.php'
?>
    <hr>
        <div class="container">
        <form method="POST" action="">
          <input type="text" name="description" placeholder="Enter your to-do task..." class="text-center myInput" required>
          <input type="submit" class="btn btn-info add-btn" value="Add" name="submit_description">
		  <br>
		  <a href="Logout.php">Click here to log out</a>
        </form>
      </div>
  </div>
</div>
</body>
</html>