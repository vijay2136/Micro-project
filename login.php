<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","root","","wallet");
$con1=mysqli_connect("localhost","root","","wallet");

//mysqli_query($con1,"insert into data(status) values('ON')");
$pid=$_POST['username'];
$pass=$_POST['password'];
$_SESSION["unumber"]=$pid;
//$con=mysqli_connect("localhost","id9202464_projectnfc","project123","id9202464_project");
//mysqli_query($con,"insert into submit(ProductID_user,Password_user)values('$start1','$end')");
$q=mysqli_query($con,"select * from login");
$z=mysqli_query($con,"select * from login");
$storeArray = array();
$s=mysqli_query($con,"select * from login");
$r=mysqli_query($con,"select * from login");
$Array=array();
while($s=mysqli_fetch_array($q))
	{
	$storeArray[]=$s['phoneno']; 
	}
$array = array();
while($r=mysqli_fetch_array($z))
	{
	$array[]=$r['Password']; 
	}
	//$array[]=$r['ProductID'];
	//echo count($storeArray);
$arrlength=count($storeArray);
/*for($x = 0; $x < $arrlength; $x++) {
    echo $storeArray[$x];
    echo "<br>";
 }
*/	
	$flag=0;
    for($x=0; $x < $arrlength; $x++) {
    		if($pid==$storeArray[$x])
    		{	
    			if($pass==$array[$x]){

    			$flag=1;

				header('Location:payment.php');
				}    		
    		

    		} 


    }
    

    	if($flag==0)
    		{ ?> <h1><?php echo "Login Failed"; ?></h1>
    	<?php
    		}

?>