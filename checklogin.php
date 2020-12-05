<?php
    include 'db_connection.php';
    include 'db.php';
    
    $my_username=$_POST['reg_uname']; 
    $my_password=$_POST['reg_password']; 
    isuservalid($my_username,$my_password);
    if(mysqli_connect_errno()){
  echo "Failed to connect".mysqli_connect_errno();
}
?>