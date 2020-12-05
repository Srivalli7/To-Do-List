<html>
<body>
<div class="container">
	<div class="container myContainer">
	<p class="text-center" style="font-size:25px;">Create your own To-Do list<p>
    <form method="post" action="checklogin.php">
        <table>
		
            <tr><td>Username:</td><td><input type="text" name="reg_uname" value="" /></td></tr>
            <tr><td>Password:</td><td><input type="password" name="reg_password" value="" /></td></tr>
        </table>
        <input type="submit" name="my_form_submit_button" value="Login" class="btn btn-info login-btn"/>
		<br>
		</div>
		</div>
    </form>
    
	<div class="container">
	<div class="container myContainer">
    <form method ="link" action="register.php">
	<br>
	
        <input type="submit" value="Register" class="register-btn"/>
		</div>
		</div>
    </form>
        <link rel="stylesheet" href="stylesheet.css">
</body>
</html>