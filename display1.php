<!DOCTYPE html>
<html>
<head>
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



.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


.button2 {
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

table {border:2px solid #232B2B;
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 18px;
   background: #DC3D24;
}

tr:nth-child(even){background-color: #DC3D24}

th {
    background-color: #DC3D24;
    color: white;
}
body{
   background-color:#232B2B;            

}
b{
    color: white;
    font-size: 20px;
}

</style>
</head>
<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<center>
<body>




<form action='display1.php' method='post'>
  <label for="fname"><b>Worker-ID</b></label><br/>
  <input type="text" name="id" placeholder="enter id.."><br/>
  
  <a href="display1.php"><button class="button button2">Submit</button></a>
  <h2><b>Employee Details</b></h2>
  <table>
    <tr>
    <th><b>Attributes</b></th>
    <th><b>Details</b></th>
  </tr>
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
	echo("<tr>");
	echo("<td>Worker_id</td>");
	echo("<td>");
	echo($row['worker_id']);
	echo("</td>");
	echo("</tr>");
	echo("<tr>");
	echo("<td>Worker_Name</td>");
	echo("<td>");
	echo($row['w_name']);
	echo("</td>");
	echo("</tr>");
	
	echo("<tr>");
	echo("<td>Age</td>");
	echo("<td>");
	echo($row['age']);
	echo("</td>");
	echo("</tr>");
	echo("<tr>");
	echo("<td>gender</td>");
	echo("<td>");
	echo($row['gender']);
	echo("</td>");
	echo("</tr>");
	echo("<tr>");
	echo("<td>Department_id</td>");
	echo("<td>");
	echo($row['dept']);
	echo("</td>");
	echo("</tr>");
	echo("<tr>");
	echo("<td>Salary</td>");
	echo("<td>");
	echo($row['salary']);
	echo("</td>");
	echo("</tr>");
}
}
}
?>
</table>
</center>
</body>
</html>
