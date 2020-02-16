
<html>
<body>
<h1>Accounting Section</h1>
<form action="account.php" method="post">
<p>account date</p>
<p><input type='text' name='a_date' size=10/></p></br>

<p>Description</p>
<p><input type='text' name='description' size=50/></p></br>
<p>Credited Amount</p>
<p><input type='text' name='credit' size=10/></p></br>
<p>Debited Amount</p>
<p><input type='text' name='debit' size=10/></p></br>

<input type="submit" value="submit"/>
</form>
</body>
</html>

<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);

$r='select balance from account order by s_no desc limit 1';
$q=mysqli_query($db,$r);
if(mysqli_num_rows($q)>0)
{
	if($row=mysqli_fetch_assoc($q))
	{
		$bal=$row['balance'];
	}
}

if(isset($_POST["a_date"]))
{
$input1 =$_POST["a_date"];
$input2 =$_POST["description"];
$input3 =$_POST["credit"];
$input4 =$_POST["debit"];

$bal= $bal+$input3-$input4;


$q="insert into account(a_date,description,credit,debit,balance) values('".$input1."','".$input2."',".$input3.",".$input4.",".$bal.")";
$p=mysqli_query($db,$q);

}
?>