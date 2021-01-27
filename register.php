<?php
$phone=$_POST["phone"];
$pass=$_POST["pass"];
$name=$_POST["name"];
$bal=0;
$con1=mysqli_connect("localhost","root","","wallet");
mysqli_query($con1,"insert into login(phoneno,Password,Balance,Uname)values('$phone','$pass','$bal','$name')");

header('location:wallet.html');
?>
