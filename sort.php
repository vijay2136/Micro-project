<?php
session_start();
?>
<html>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}
h2{
  background-color: white;
  width: 600px;
  border: 2px solid blue;
  border-radius: 10px;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
}

</style>
<body>
<table width="100%" >
<tr>
<th>Phone Number</th>
<th>Amount</th>
<th>Purpose</th>
<th>Paid to</th>
<th>Type</th> 
</tr>
<?php
$pid=$_SESSION["unumber"];
$sort=$_POST["sorted"];
$sql = "SELECT * FROM transactions where phone='$pid' and purpose='$sort'";
$con=mysqli_connect("localhost","root","","wallet");
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) { 

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {  ?> 
        <tr><td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["amount"]; ?></td>
        <td><?php echo $row["purpose"]; ?></td>
        <td><?php echo $row["touser"]; ?> </td>
    	 <td><?php echo $row["type"]; ?> </td>
    </tr>
          <?php
     
     }
} 

else {
    echo "No transactions";
}
?>

<div class="sum"> <?php
$con1=mysqli_connect("localhost","root","","wallet");
$res = mysqli_query($con1,"SELECT SUM(amount) AS value_sum FROM transactions where phone='$pid' and purpose='$sort'"); 


$row = mysqli_fetch_assoc($res); 
$sum = $row['value_sum'];

?> <h2 class="styling12">Your total expense on <?php echo  strtoupper($sort) ?> is <?php echo "$sum"; ?> </h2>
</div>
</body>
</html>