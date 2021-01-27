<?php
session_start();
$pid=$_SESSION["unumber"];
$money=$_POST["amount"];
$type="Deposited";
$con1=mysqli_connect("localhost","root","","wallet");
mysqli_query($con1,"update login set balance=balance+'$money' where phoneno='$pid'");
$con=mysqli_connect("localhost","root","","wallet");
mysqli_query($con,"insert into transactions(phone,amount,type)values('$pid','$money','$type')");
header('location:payment.php');
?>




