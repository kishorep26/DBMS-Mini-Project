<!DOCTYPE html>
<html>
<style>

.buttons {
    background-color:steelblue; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid steelblue;
}

.button1:hover {
    background-color: steelblue;
    color: white;
}


input[type=text], select {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
border: 2px solid steelblue;
    border-radius: 20px;
    
}

input[type=submit] {
    width: 20%;
    background-color:steelblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
border: 2px solid white;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: ;
    padding: 30px;
}
.center {
    color:white;				
   text-align:center;
    font-family:helvetica;
  }
h2{
    border:2px solid white;			
    background-color:steelblue;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
body{
   background-color:lightgrey;			

}


</style>
<a href='frontpage.php'><button class="buttons button1">HOME</button></a>
<form action="supplies1.php" method="post">
<body>


<div class='center'>
	<h2><b>  supply details </b></h2>
</div>
<center>
  <label><b>supply date</b></label></br>
    <input type="text" name="s_date" placeholder="yyyy-mm-dd.."></br>

    <label><b>location</b></label></br>
    <input type="text" name="location" placeholder="place.."></br>
    <label><b>vehicle number</b></label></br>
    <input type="text" name="vehicle_no" placeholder="name...">
	
  
   
    



<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

$q="Select invoice from purchase";
$sql=mysqli_query($db,$q);
$inv=array();
if(mysqli_num_rows($sql)>0)
{
$i=0;
while($row=mysqli_fetch_assoc($sql))
{
	$inv[$i++]=$row['invoice'];
}
}
echo("<form action='supplies.php' method='POST'><center>


<label><b>Invoice</b></label></br>
  <select name='invoice'>
  <option>--</option>");
foreach($inv as $inv1)
{
echo("<option value='".$inv1."'>".$inv1."</option>");
}
  echo('</select></br>

<input type="submit" value="submit"/></form>');


if(isset($_POST["invoice"]))
{
$input1 =$_POST["invoice"];
$input2 =$_POST["location"];
$input3 =$_POST["vehicle_no"];
$input4 =$_POST["s_date"];

$q="insert into supplies(invoice,location,vehicle_no,s_date) values(".$input1.",'".$input2."','".$input3."','".$input4."')";
$p=mysqli_query($db,$q);
echo("</center>");
if($p)
echo("success");
else
echo("fail");
}


?>
</center>
</form>
</body>
</html>
