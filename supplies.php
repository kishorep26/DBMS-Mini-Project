<html>
<body>
<h1>supply detail</h1>



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
echo("<form action='supplies.php' method='POST'>

<p>location</p>
<p><input type='text' name='location' size=20/></p></br>
<p>vehicle number</p>
<p><input type='text' name='vehicle_no' size=20/></p></br>
<p>supply date</p>
<p><input type='text' name='s_date' size=20/></p></br>





<p>INVOICE</p>
  <select name='invoice'>
  <option>--</option>");
foreach($inv as $inv1)
{
echo("<option value='".$inv1."'>".$inv1."</option>");
}
  echo('</select>

<input type="submit" value="submit"/></form>');


if(isset($_POST["invoice"]))
{
$input1 =$_POST["invoice"];
$input2 =$_POST["location"];
$input3 =$_POST["vehicle_no"];
$input4 =$_POST["s_date"];

$q="insert into supplies(invoice,location,vehicle_no,s_date) values(".$input1.",'".$input2."','".$input3."','".$input4."')";
$p=mysqli_query($db,$q);
if($p)
echo("success");
else
echo("fail");
}


?>


</body>
</html>