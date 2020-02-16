<html>
<body>
<form action='display.php' method='post'>
<input type='text' name='id' size=25\>
<input type='submit' value='submit'\></br>

<?php
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);



if(isset($_POST['id']))
{
$q="Select * from worker where worker_id=".$_POST['id'];
$sql=mysqli_query($db,$q);
if(mysqli_num_rows($sql)>0)
{

while($row=mysqli_fetch_assoc($sql))
{
	echo($row['worker_id']."".$row['w_name']."".$row['age']);
	echo("<br>");
	echo($row['w_name']);
	echo("<br>");
	echo($row['age']);
	echo("<br>");
	echo($row['gender']);
}
}
}
?>


</form>
</body>
</html>
