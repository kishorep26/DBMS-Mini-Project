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


input[type=text]{
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border: 2px solid #DC3D24;
    border-radius: 10px;
    
}

select[name=gender] {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border: 2px solid #DC3D24;
    border-radius: 10px;
    
}
select[name=dept] {
    width: 30%;
    padding: 11px 20px;
    margin: 15px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border: 2px solid #DC3D24;
    border-radius: 10px;
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

<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<form action="worker1.php" method="post">
<body>



<div class='center'>
	<h2> Worker details</h2>
</div>

<div>
<center>
  <form action="/action_page.php">
    <label><b>First Name</b></label></br>
    <input type="text" name="f_name" placeholder="First name.."></br>

    <label><b>Last Name</b></label></br>
    <input type="text" name="l_name" placeholder="Last name.."></br>
	
    <label><b>Age</b></label></br>
    <input type="text" name="age" placeholder="Enter age.."></br>
	
    
	
 <label><b>Gender</b></label></br>
	 <select name='gender'>
	  <option value='----'>----</option>
	 <option value='male'>Male</option>
	  <option value='female'>Female</option>
	  </select>
   <br/>
	


	 <label><b>Department ID</b></label></br>
     
	 <select name='dept'>
	  <option value='----'>----</option>
	 <option value='1000'>1000</option>
	  <option value='1001'>1001</option>
	   <option value='1002'>1002</option>
            <option value='1003'>1003</option>

	  </select>
   <br/>
	
	 <label><b>Salary</b></label></br>
    <input type="text" name="salary" placeholder="salary.."></br>
  
    <input type="submit" value="Submit">
  </form>
  </center>
</div>


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
