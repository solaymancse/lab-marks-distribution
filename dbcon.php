<?php
 $host='localhost';
 $user='root';
 $pass='';
 $db='puclab';
 $con=mysqli_connect($host,$user,$pass,$db);
 if(mysqli_connect_errno())
 {
     echo "Failed to connect to server or database: ".mysqli_connect_error();
 }
 ?>