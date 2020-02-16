<html>
<body>
<h1>Employee details</h1>
<form action="yearsal.php" method="post">

<p>salary</p>
<p><input type='text' name='salary' size=50/></p></br>
<input type="submit" value="submit"/>

<p>yearly salary</p><br>
<p> 60000*12=720000 </p>
<?
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

if(isset($_POST["salary"]))
{
$input1 =$_POST["salary"];
}

$q="update ysal as $input6*12";

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