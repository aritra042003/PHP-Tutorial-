<?php
$bookid = $_GET['id'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'db1');
$q = "delete from book where bookid =$bookid";
mysqli_query($con,$q);
mysqli_close($con);
?>