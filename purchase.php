
<html>
<body>
<h1>purchaser</h1>
<form action="purchase.php" method="post">
<p>purchsase date</p>
<p><input type='text' name='p_date' size=10/></p></br>
<p>brick id</p>
<p><input type='text' name='brick_id' size=10/></p></br>
<p>purchaser name</p>
<p><input type='text' name='p_name' size=10/></p></br>
<p>quantity</p>
<p><input type='text' name='quantity' size=10/></p></br>
<input type="submit" value="submit"/>
</form>
</body>
</html>

<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);
if(!$db)
{
die("Connection");
}
if(isset($_POST["p_date"]))
{
$input1 =$_POST["p_date"];
$input2 =$_POST["brick_id"];
$input3 =$_POST["p_name"];
$input4 =$_POST["quantity"];
$q="CALL get_account('".$input1."' ,'".$input2."','".$input3."','".$input4."')";
$sql=mysqli_query($db,$q);
if(!$sql)
{
echo("Failed");
}

//$q="insert into purchase(p_date,brick_id,p_name,quantity,total_cost) values('".$input1."',".$input2.",'".$input3."','".$input4."','".$total."')";
//$p=mysqli_query($db,$q);
}
?>