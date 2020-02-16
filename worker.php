
<html>
<body>
<h1>Employee details</h1>
<form action="worker.php" method="post">


<p>First Name</p>
<p><input type='text' name='f_name' size=50/></p></br>
<p>last  Name</p>
<p><input type='text' name='l_name' size=50/></p></br>
<p>Age</p>
<p><input type='text' name='age' size=10/></p></br>
<p>Gender</p>
<p><input type='text' name='gender' size=10/></p></br>
<p>Department</p>
<p><input type='text' name='dept' size=10/></p></br>
<p>Salary</p>
<p><input type='text' name='salary' size=10/></p></br>
<input type="submit" value="submit"/>
<p>yearly salary</p>
<p><input type='text' name='salary' size=15/></p></br>


<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

if(isset($_POST["f_name"]))
{
$input1 =$_POST["f_name"];
$input2 =$_POST["l_name"];
$input3 =$_POST["age"];
$input4 =$_POST["gender"];
$input5 =$_POST["dept"];
$input6 =$_POST["salary"];

$q="insert into worker(f_name,l_name,age,gender,dept,salary) values('".$input1."','".$input2."',".$input3.",'".$input4."',".$input5.",".$input6.")";

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