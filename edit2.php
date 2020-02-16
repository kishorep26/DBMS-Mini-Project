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
    border: 2px solid #DC3D24;
}

.button1:hover {
    background-color: #DC3D24;
    color: white;
}


input[type=text], select {
    width: 25%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border: 2px solid #DC3D24;
    border-radius:10px ;
    
}


input[type=submit] {
    width: 20%;
    background-color: #DC3D24;
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
    background-color: #232B2B;
    padding: 30px;
}
.center {
    color:white;				
   text-align:center;
  }
h2{	
    background-color:#DC3D24;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
body{
   background-color:#232B2B;			

}
b{
    color: white;
    font-size: 20px;
}


</style>


<body>
<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<div class='center'>
	<h2>Update Worker details</h2>
</div>

<div>
<center>

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
echo("<label><b>Worker id</b></label></br>");
echo("<form action='edit2.php' method='POST'>
	 <select name='worker'>
  <option>----</option>");
foreach($inv as $inv1)
{
echo("<option value='".$inv1."'>".$inv1."</option>");
}
  

echo('</select></br>');

	echo("<label><b>Attribute to edit</b></label></br>");
	 echo("
	 <select name='attr'>
	  <option value='----'>----</option>");
	  
	 echo("<option value='f_name'>First name</option>");
	  echo("<option value='l_name'>Last name</option>");
	  echo("<option value='age'>Age</option>");
	  echo("<option value='gender'>Gender</option>");
	  echo("<option value='dept'>Department_id</option>");
	  echo("<option value='salary'>Salary</option>");
	 echo("</select>
   <br/>");
 	echo("
	 <label><b>Enter new one</b></label></br>
    <input type='text' name='name' placeholder='new..'/></br>
    <br>
    <br>
  
    <input type='submit' value='Submit'/>
  </form>");
  
  if(isset($_POST["name"]))
{
$input1 =$_POST["worker"];
$input2 =$_POST["attr"];
$input3 =$_POST["name"];

$q="UPDATE worker SET ".$input2."='".$input3."' where worker_id=".$input1;
$r=mysqli_query($db,$q);
}


?>
  
  
  </center>
</div>



</body>
</html>
