

<?php
    include 'db_connection.php';
	include 'header.php';
    
    function createUser($username, $password){
		$conn=mysqli_connect('localhost','***','***','***');
        $SQL = "INSERT INTO users (username, passwordHash) VALUES ('" . $username . "','" . $password . "')";
        $result = mysqli_query($conn, $SQL);        
    }
    
    function isUserValid($username,$password){
		$conn=mysqli_connect('localhost','***','***','***');
		
        $SQL = "SELECT * FROM users WHERE username = '". $username . "' AND passwordHash = '" . $password . "'";
        $result = mysqli_query($conn, $SQL);
        if ($result == false)
        {
            die(mysql_error());
        }
        
        $count=mysqli_num_rows($result);
        if($count == 1){
            setcookie('login',$username);
            setcookie('islogged',true);
            $dsatz = mysqli_fetch_assoc($result);
            setcookie('my_id', $dsatz['id']);
            header("location:list.php");
        } else {
            unset($_COOKIE['login']);
            setcookie('login', false);
            setcookie('islogged',false);
            setcookie('id',false);
            echo "Wrong Username or Password, try again!";
        }
        
    }
    
    function getTodoItems($user_id){
		
		$conn=mysqli_connect('localhost','***','***','***');
        $SQL = "SELECT * FROM todos WHERE user_id = ". $user_id . "";
        $result = mysqli_query($conn, $SQL);
        echo "<form action='#' method = 'POST'>";
        while($dsatz = mysqli_fetch_assoc($result))
        {   
            echo "<table>";
            echo "<tr>";
            echo "<td><input type='checkbox' name='check_list[]' value='". $dsatz["id"] ."'></td>";
            echo "<td>" . $dsatz["todo_item"] . "</td>";
            echo "</tr>";
            echo "</table>";
        }
		echo "<br>";
        echo "</hr>";
		
	   echo "<input type='submit' value='Select item(s) and click to delete' class='delete-btn'/>";
        echo "</form>";
		
    }

    function addTodoItem($user_id, $todo_text){
		$conn=mysqli_connect('localhost','***','***','***');
        $SQL = "INSERT INTO todos(user_id, todo_item) VALUES (".$user_id.",'".$todo_text."')";
        $result = mysqli_query($conn, $SQL);        
    }
    
    function deleteTodoItem($user_id, $todo_id){
		$conn=mysqli_connect('localhost','***','***','***');
        $SQL = "DELETE FROM todos WHERE id = ".$todo_id." AND user_id = ".$user_id."";
        $result = mysqli_query($conn, $SQL);
    }

?>
