<html>
<body>
    <form method="post">
        <table>
            <tr><td>Username:</td><td><input type="text" name="reg_uname" placeholder="Enter Username" /></td></tr>
            <tr><td>Password:</td><td><input type="password" name="reg_password" placeholder="Enter Password" /></td></tr>
            <tr><td>
                <input type="submit" name="my_form_submit_button" value="Just Register"/>
            </td><td>

            </td></tr>
        </table>
    </form>
    
    <form method ="get" action="login.php">
        <input type="submit" value="Try to login" />
    </form>    
    
    <?php
        include 'db_connection.php';
		$conn=mysqli_connect('localhost','***','***','***');
        if (isset($_POST['reg_uname'])) {
            include 'db.php';
            createUser($_POST['reg_uname'],$_POST['reg_password']);
			echo '<script>alert("Your account has been created. Login to create your To-Do list")</script>' ;
        }   
        
    ?>


</body>
</html>