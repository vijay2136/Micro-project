<?php
session_start();
$pid=$_SESSION["unumber"];
$to=$_POST["pay_to"];
$amt=$_POST["pay_amt"];
$pur=$_POST["purpose"];
$type="Withdrawal";
$con=mysqli_connect("localhost","root","","wallet");
$curbal=$_SESSION["curamount"];
if($curbal>$amt) {
mysqli_query($con,"insert into transactions(phone,amount,purpose,touser,type)values('$pid','$amt','$pur','$to','$type')");
mysqli_query($con,"update login set balance=balance+'$amt' where phoneno='$to'");
mysqli_query($con,"update login set balance=balance-'$amt' where phoneno='$pid'");

header('location:payment.php');
}

else 
{   
header('location:failed.html');
}

?>
<script>
function myFunction() {
  var x = document.getElementById("form1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
  else {
    x.style.display = "none";
  }
}
</script>