<html>
<body>
<?php
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);
if($db)
echo("success");
else
echo("na hua success");

$q='select * from worker';
$r=mysqli_query($db,$q);
if(mysqli_num_rows($r)>0)
{
	while($row=mysqli_fetch_assoc($r))
	{
	  echo($row['w_name']."&nbsp&nbsp&nbsp&nbsp&nbsp<a href='delete.php?id=".$row['worker_id']."'>delete</a>");
	echo("<br>");
}
}



if(isset($_GET['id']))
{
     $r="DELETE FROM worker
     WHERE worker_id=".$_GET['id'];
     $q=mysqli_query($db,$r);
}
?>
</form>
</body>
</html>
