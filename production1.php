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
    border: 2px solid teal;
}

.button1:hover {
    background-color: teal;
    color: white;
}


input[type=text], select {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
border: 2px solid teal;
    border-radius: 10px;
    
}

input[type=submit] {
    width: 20%;
    background-color:teal;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
border: 2px solid white;
    border-radius: 10px;
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
    border:2px solid #232B2B;			
    background-color:teal;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
    border-radius: 20px; 
}
body{
   background-color:#232B2B;			

}
b{
    color: white;
    font-size: 20px;
}

</style>
<a href='frontpage.php'><button class="buttons button1">HOME</button></a>
<form action="production1.php" method="post">
<body>


<div class='center'>
	<h2>Production details</h2>
</div>
<center>
  <label><b>Production date</b></label></br>
    <input type="text" name="p_date" placeholder="yyyy/mm/dd.."></br>

	
 <label><b>Brick_id</b></label></br>
	 <select name='brick_id'>
	  <option value='----'>----</option>
	 <option value='10000'>10000</option>
	  <option value='10001'>10001</option>
	   <option value='10002'>10002</option>
 <option value='10003'>10003</option>
 <option value='10004'>10004</option>
	  </select>
   <br/>

	
 <label><b>Brick Type</b></label></br>
	 <select name='brick_type'>
	  <option value='----'>----</option>
	 <option value='concrete bricks'>Concrete bricks</option>
	  <option value='fly ash clay bricks'>Fly ash clay bricks</option>
	   <option value='sand lime bricks'>Sand lime clay bricks</option>
 	<option value='burnt clay bricks'>Burnt clay bricks</option>
 	<option value='engineering bricks'>Engineering bricks</option>
	  </select>
   <br/>


 <label><b>Unit produced</b></label></br>
<input type="text" name="quantity" placeholder="number..."></br>
	
  <input type="submit" value="submit"/><br>
   
    



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
</center>
</form>
</body>
</html>
