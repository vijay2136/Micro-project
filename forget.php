<?php
$pid=$_POST["phone"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
if($pass1==$pass2){
	$con1=mysqli_connect("localhost","root","","wallet");
	mysqli_query($con1,"update login set Password='$pass2' where phoneno='$pid'");
	header('location:wallet.html');
}
else
{ 
	?>
	<h1><?php echo"Password does not match please try again" ?>
	<?php
}
?>
