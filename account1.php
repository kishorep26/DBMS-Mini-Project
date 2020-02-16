<!DOCTYPE html>
<html>
<style>

.buttons {
    background-color:steelblue; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid royalblue;
}

.button1:hover {
    background-color: royalblue;
    color: white;
}


input[type=text], select {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
border: 2px solid royalblue;
    border-radius: 20px;
    
}

input[type=submit] {
    width: 20%;
    background-color:Royalblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
border: 2px solid white;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: ;
    padding: 30px;
}
.center {
    color:white;				
   text-align:center;
    font-family:helvetica;
  }
h2{
    border:2px solid white;			
    background-color:Royalblue;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
body{
   background-color:lightgrey;			

}


</style>
<a href='frontpage.php'><button class="buttons button1">HOME</button></a>
<form action="account1.php" method="post">
<body>


<div class='center'>
	<h2><b>  Account details </b></h2>
</div>
<center>
<label><b>Account date</b></label></br>
    <input type="text" name="a_date" placeholder="dd/mm/yyyys.."></br>
	
  <label><b>Description</b></label></br>
    <input type="text" name="description" placeholder="....."></br>

      <label><b>Credit</b></label></br>
    <input type="text" name="credit" placeholder="amount..."></br>
    <label><b>Debit</b></label></br>
    <input type="text" name="debit" placeholder="amount..."></br>
	
  <input type="submit" value="submit"/>
   
    



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
</center>
</form>
</body>
</html>
