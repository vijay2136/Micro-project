<?php
session_start();
?>
<html>
<head>
<title>Payment</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=2.0">

<script >
  function myFunction() {
  var x = document.getElementById("register").style.display = "block";
  }
function myFunction2() {
  var x = document.getElementById("register").style.display = "none";
  }

  function myFunction3() {
  var y = document.getElementById("login").style.display = "block";
  }
function myFunction4() {
  var y = document.getElementById("login").style.display = "none";
  } 
  </script>



<style>


body{
  background-color:
}
.header {
  overflow: hidden;
  background-color: lightblue;
  padding: 5px 20px;
}
.welcome{
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
#form1 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  display: none;
  position: relative;
  left:120px;
  bottom: 210px;
}
#box {
  padding:5px;
  width:200px;
  position: absolute;  
  left:1050px;
  top: 470px;
}

  .logo{ 
    position: relative;
    left:650px;
    top: 430px;
  }
  .table{
   position: relative;
   bottom: 360px; 
  }
  .button{
    position: relative;
   bottom:50px; 
   left: 350px;
  }
.button2{
   color: #fff ;
    text-transform: uppercase;
    text-decoration: none;
    position: relative;
    bottom:10px;
    top: 130px;
    left: 760px;
    background: #ed3330;
    padding: 20px;
    border-radius: 5px;
    display: inline-block;
    border: none;
    transition: all 0.4s ease 0s;
  }

.button2:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}

.button3{
   color: #fff ;
    text-transform: uppercase;
    text-decoration: none;
    position: relative;
    bottom: 30px;
    background: #ed3330;
    padding: 20px;
    border-radius: 5px;
    display: inline-block;
    border: none;
    transition: all 0.4s ease 0s;
  }

.button3:hover {
background: #434343;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}

.balance {
    padding: 2px;
    background: #fff;
    opacity: 300;
    border: 10px solid #555;
    color: #666;
    text-align: center; 
    font: 50px Arial, sans-serif;
}

.register {
  z-index: 4;
  display: none;
  background-color: white;
  width: 400px;
  height: 500px;
  position: absolute;
  margin-left: 521px;
  top: 150px;
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 1), 0 6px 20px 0 rgba(0, 0, 0, 1);
  padding: 40px 40px 20px 40px;
  border-radius: 10px;
}

.register form input[type=text], input[type=password], input[type=text] {
  border: none;
  border-radius: 5px;
  border-bottom: 3px solid #333;
  margin: 10px 0;
  padding: 10px 15px;
  width: 100%;
  height: 50px;
  box-sizing: border-box;
}

input[type=submit] {
  margin-top: 20px;
  padding: 20px 80px;
  background-color: #000;
  color: white;
  border: none;
  height: 50px;
  font-size: 20px;
}

input[type=submit]:hover {
  background-color: blue;
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.9);
}

.close_button {
  height: 20px;
  width: 20px;
  float: right;
  margin-top: -10px;
  margin-right: -10px;
  transition: .25s;
}

.close_button:hover {
  transform: scale(1.3);
}

.sort{
  position: absolute;
  left: 1000px;
  top: 400px;
}
body{
  overflow-x: hidden;
}

</style> 




<body>	   

        <div class="header">
          <a href="#default" class="logo"></a>
          <div class="header-right">
            <a class="active" href="http://localhost/asd/wallet.html">LOGOUT</a>
            </div>
        </div>
        <div class="welcome" align="center"><h1>Welcome <?php
              $pid=$_SESSION["unumber"];
              $con=mysqli_connect("localhost","root","","wallet");
              $q=mysqli_query($con,"select * from login");
              $z=mysqli_query($con,"select * from login");
              
              $storeArray = array();
              $Array=array();
              while($s=mysqli_fetch_array($q))
              {
                $storeArray[]=$s['phoneno']; 
              }
              $array = array();
              while($r=mysqli_fetch_array($z))
              {
                $array[]=$r['Uname']; 
              }
              $arrlength=count($storeArray);
              for($x=0; $x < $arrlength; $x++) {
                if($pid==$storeArray[$x])
              { 
                echo " ". $array[$x];

              }
            }
            ?>
            </h1>
          </div>
        <div class="balance">
        <h4><b>Your Current wallet Balance is: </b>
        <h1><b><?php
              $pid=$_SESSION["unumber"];
              $con=mysqli_connect("localhost","root","","wallet");
              $q=mysqli_query($con,"select * from login");
              $z=mysqli_query($con,"select * from login");
              
              $storeArray = array();
              $Array=array();
              while($s=mysqli_fetch_array($q))
              {
                $storeArray[]=$s['phoneno']; 
              }
              $array = array();
              while($r=mysqli_fetch_array($z))
              {
                $array[]=$r['Balance']; 
              }
              $arrlength=count($storeArray);
              for($x=0; $x < $arrlength; $x++) {
                if($pid==$storeArray[$x])
              {   
                $_SESSION["curamount"]=$array[$x];
                echo $array[$x];
              }
            
            }
            ?>
            </b>
        </div>
        <div class="table">
          <table width="600" height="45%" border="10">
        	 <tr>
          <form method="post" action="transactionadd.php">
        	 <td><strong><h3>Pay to</h3></strong></td>
        	     <td><label>
               <input type="text" name="pay_to" id="pay_to" size="30"  pattern="[0-9]{10}"/>
              </label></td>
             </tr>
              <tr>
        	     <td><strong><h3>Payment amount</h3></strong></td>
        	     <td><label>
        	     <input type="text" name="pay_amt" id="pay_amt" size="30" required/>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong><h3>Purpose of payment</h3></strong></td>
        	      <td><label>
                  <input type="text" name="purpose" id="purpose" size="30" required/>
                  </label></td></tr>
                <tr><td><td><label>
                <input type="submit"value="Proceed with transaction"/>
              </label></td></td></tr>
            </form>
            </div>

              <div class="logo">
                <img src="image.svg" width="340" height="250">
                </div>
              <div class="sort">
                <h2>SORT TRANSACTIONS ON THE BASIS OF</h2>
                    <form method="post" action="sort.php" >
                      <input type="text" name="sorted" required placeholder="Enter your choice">
                      <input type="submit" value="SORT">
                    </form>
            </div>
                  <button class="button2" onclick="myFunction(); myFunction4()">Add Money</button>
                  <div class="register" id="register">
                  <h2 style="text-align: center; padding-bottom: 30px; padding-left: 120px; display: inline-block;">FILL UP</h2>
                  <img src="close_button.png" alt="close_button" class="close_button" onclick="myFunction2();">
                    <form method="post" action="add.php" >
                      <input type="text" pattern="[1-9]{1}[0-9]{11}" required placeholder="Enter your Card number">
                      <input type="password" required placeholder="Enter your CVV">
                      <input type="text" name="amount" placeholder="Enter amount">
                      <div class="button4">
                      <input type="submit" name="submit" value="Proceed">
                    </div>
                    </form>
                  </div>
                </div>
             <div class="button_cont" align="center"><a class="button3" href="transactions.php" rel="nofollow noopener">View Transactions</a>


           
              
              </div>
</body>
</html>