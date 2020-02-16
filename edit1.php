<html>
<body>
<h1>Update worker detail</h1>



<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

$q="Select worker_id from worker";
$sql=mysqli_query($db,$q);
$inv=array();
if(mysqli_num_rows($sql)>0)
{
$i=0;
while($row=mysqli_fetch_assoc($sql))
{
	$inv[$i++]=$row['worker_id'];
}
}
echo("<form action='edit1.php' method='POST'>

  <select name='worker'>
  <option>--</option>");
foreach($inv as $inv1)
{
echo("<option value='".$inv1."'>".$inv1."</option>");
}
  

echo('</select>');



echo("

  <select name='attr'>
  <option>--</option>");



echo("<option value='f_name'>first name</option>");
echo("<option value='l_name'>last name</option>");
echo("<option value='age'>Age</option>");
echo("<option value='gender'>gender</option>");
echo("<option value='dept'>department_id</option>");
echo("<option value='salary'>worker salary</option>");

echo('</select>

<input type="text" name="name" size=25/>
<input type="submit" value="submit"/></form>');


if(isset($_POST["name"]))
{
$input1 =$_POST["worker"];
$input2 =$_POST["attr"];
$input3 =$_POST["name"];

$q="UPDATE worker SET ".$input2."=".$input3." where worker_id=".$input1;
$r=mysqli_query($db,$q);
}





?>



</body>
</html>