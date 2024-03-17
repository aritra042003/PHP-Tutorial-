<?php
$publisher = $_POST['pub'];
$per = $_POST['percent'];
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'db1');
$q = "UPDATE Book SET price = price*(1+ $per/100) WHERE  publisher= '$publisher'";
mysqli_query($con,$q);
mysqli_close($con);
?>