<!DOCTYPE html>
<html>
<head>
<style>
    div {
    border-radius: 5px;
    background-color: ;
    padding: 30px;
}

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


h2{
    border:2px solid #232B2B;           
    background-color:teal;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
    border-radius: 20px; 
}


table {border:2px solid teal;
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
    background-color:teal;
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
<h2>Daily Production info</h2>
</div>
<center>
<table>
  <tr>
  <th> <b>Production</b></th>
    <th><b>Brick_id</b></th>
	<th><b>Brick type</b></th>
       <th><b>Quantity</th></b>
        

<tr>
<?php  
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);
if($db)
echo("");
else
echo("na hua success"); 
  
  

$q='select * from production';
$r=mysqli_query($db,$q);

  while($row=mysqli_fetch_assoc($r))
	{     echo("<tr>");
	   echo("<td>");
	    echo($row['p_date']);
           echo("</td>");
		echo("<td>");
	  echo($row['brick_id']);
      echo("</td>");
	  echo("<td>");
	  echo($row['brick_type']);
	  echo("</td>");
echo("<td>");
	  echo($row['quantity']);
	  echo("</td>");
	    
	    echo("</tr>");
	    echo("<br>");
	
	}

?>

</table>
</center>
</body>
</html>
