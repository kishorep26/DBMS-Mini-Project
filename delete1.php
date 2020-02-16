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

h2{
    background-color:#DC3D24;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}


table {border:2px solid #232B2B;
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 18px;
   background: #DC3D24;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #DC3D24;
    color: white;
}
body{
   background-color:#232B2B;			

}
.center {
    color:white;                
   text-align:center;
    font-family:helvetica;
  }
b{
    color: white;
    font-size: 20px;
}


</style>
</head>
<body>

<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<div class="center">
<h2>Delete Workers info</h2></div>
<center>
<table>
  <tr>
  <th><b> Worker id</b></th>
    <th><b>worker name</b></th>
	<th><b>Department id</b></th>
       <th><b>Delete operation</b></th>
	</tr>
<?php  
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);
if($db)
echo("");
else
echo("na hua success"); 
  
  

$q='select * from worker';
$r=mysqli_query($db,$q);

  while($row=mysqli_fetch_assoc($r))
	{     echo("<tr>");
	echo("<td>");
	  echo($row['worker_id']);
      echo("</td>");
		echo("<td>");
	  echo($row['w_name']);
      echo("</td>");
	  echo("<td>");
	  echo($row['dept']);
	  echo("</td>");
	  echo("<td>");
	  echo("&nbsp&nbsp&nbsp&nbsp&nbsp<a href='delete1.php?id=".$row['worker_id']."'><button>delete</button></a>");
	   echo("</td>");
	  echo("</tr>");
	echo("<br>");
	
	}


if(isset($_GET['id']))
{
     $r="DELETE FROM worker
     WHERE worker_id=".$_GET['id'];
     $q=mysqli_query($db,$r);
}
?>
</table>
</center>
</body>
</html>
