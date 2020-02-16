<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

$q="Select invoice from purchase";
$sql=mysqli_query($db,$q);
echo("<form action='test.php' method='POST'>
  <select name='category'>
  <option>--</option>");

if(mysqli_num_rows($sql)>0)
{
	
	while($row=mysqli_fetch_assoc($sql))
	{
		echo("<option value='".$row['invoice']."'>".$row['invoice']."</option>");
	}
}

  echo('</select></form>');
?>
