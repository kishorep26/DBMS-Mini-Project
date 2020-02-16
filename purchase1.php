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
    border: 2px solid darkslateblue;
}

.button1:hover {
    background-color: darkslateblue;
    color: white;
}


input[type=text], select {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
border: 2px solid darkslateblue;
    border-radius: 20px;
    
}

input[type=submit] {
    width: 20%;
    background-color:darkslateblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
border: 2px solid white;
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
    background-color:darkslateblue;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
body{
   background-color:lightgrey;			

}


</style>

<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<form action="purchase1.php" method="post">
<body>

<div class='center'>
	<h2><b>  purchaser details </b></h2>
</div>

<div>
<center>
  <form action="/action_page.php">
    <label><b>Purchase date</b></label></br>
    <input type="text" name="p_date" placeholder="yyyy-mm-dd.."></br>

    <label><b>Brick_id</b></label></br>
    <input type="text" name="brick_id" placeholder="id.."></br>
    <label><b>Purchaser Name</b></label></br>
    <input type="text" name="p_name" placeholder="name..."></br>
	
	 <label><b>Quantity</b></label></br>
    <input type="text" name="quantity" placeholder="quantity.."></br>
  
    <input type="submit" value="Submit">
  </form>
  </center>
</div>


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
$q="insert into purchase(p_date,brick_id,p_name,quantity) values('".$input1."','".$input2."','".$input3."','".$input4."')";
$sql=mysqli_query($db,$q);

if(!$sql)
{
echo("Failed");
}

}
?>
</form>
</body>
</html>
