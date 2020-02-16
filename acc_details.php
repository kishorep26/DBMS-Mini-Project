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
    border: 2px solid dodgerblue;
}

.button1:hover {
    background-color: dodgerblue;
    color: white;
}


h2{
    border:2px solid white;			
    background-color:Dodgerblue;
    padding: 15px 32px;
    font-size: 100px;
    margin: 1px 300px;
}


table {border:2px solid dodgerblue;
    border-collapse: collapse;
    width: 80%;
}

th, td {
	
    text-align: left;
	text-size: 100px;
    padding: 25px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: dodgerblue;
    color: white;
}
body{
   background-color:lightgrey;			

}

</style>

<a href='frontpage.php'><button class="buttons button1">HOME</button></a>


</head>
</div>
<body>



<h2><center>Account info</center></h2>
</div>
<div>
<center>
<table>
  <tr>
  <th>s.no</th>
    <th>Date</th>
	<th>Description</th>
       <th>credit</th>
	   <th>debit</th>
	   <th>Balance</th>
	   <th><delete</th>
	</tr>
<?php  
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);

$q='select * from account';
$r=mysqli_query($db,$q);

  while($row=mysqli_fetch_assoc($r))
	{     echo("<tr>");
	echo("<td>");
	  echo($row['s_no']);
      echo("</td>");
		echo("<td>");
	  echo($row['a_date']);
      echo("</td>");
	  echo("<td>");
	  echo($row['description']);
	  echo("</td>");
	  echo("<td>");
	  echo($row['credit']);
	  echo("</td>");
	  
	  echo("<td>");
	  echo($row['debit']);
	  echo("</td>");
	  echo("<td>");
	  echo($row['balance']);
	  echo("</td>");
	  
	  echo("<td>");
	  echo("&nbsp&nbsp&nbsp&nbsp&nbsp<a href='acc_details.php?id=".$row['s_no']."'><button>delete</button></a>");
	   echo("</td>");
	  echo("</tr>");
	echo("<br>");
	
	}


if(isset($_GET['id']))
{
     $r="DELETE FROM account
     WHERE s_no=".$_GET['id'];
     $q=mysqli_query($db,$r);
}
?>
</table>
</center>
</div>
</body>

</html>
