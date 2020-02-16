
<html>
<body>
<h1>Production details</h1>
<form action="production.php" method="post">


<p>production date</p>
<p><input type='text' name='p_date' size=20/></p></br>
<p>Brick id</p>
<p><input type='text' name='brick_id' size=20/></p></br>
<p>Quantity produced</p>
<p><input type='text' name='quantity' size=20/></p></br>
<p>Brick Type</p>
<p><input type='text' name='brick_type' size=20/></p></br>

<input type="submit" value="submit"/>


<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

if(isset($_POST["p_date"]))
{

$input2 =$_POST["p_date"];
$input3 =$_POST["brick_id"];
$input4 =$_POST["quantity"];
$input5 =$_POST["brick_type"];


$q="insert into production(p_date,brick_id,quantity,brick_type) values('".$input2."','".$input3."','".$input4."','".$input5."')";
$p=mysqli_query($db,$q);
if($p)
echo("success");
else
echo("fail");


}
?>

</form>
</body>
</html>