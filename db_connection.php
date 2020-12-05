<?php
/* $servername = 'localhost';
$username = '***';
$password = '***';
$dbname= '***';
$conn = mysqli_connect($servername,$username,$password,$dbname); */

mysqli_connect('localhost','***','***','***');
if(mysqli_connect_errno()){
  echo "Failed to connect".mysqli_connect_errno();
}

 ?>
