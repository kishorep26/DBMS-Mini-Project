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
    border: 2px solid darkslateblue;
}

.button1:hover {
    background-color: darkslateblue;
    color: white;
}


h2{
    border:2px solid white;			
    background-color:Darkslateblue;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}


table {
border:2px solid darkslateblue;
    border-collapse: collapse;
    width: 70%;
}

th, td {
	
    text-align: left;
	text-size: 100px;
    padding: 25px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:darkslateblue;
    color: white;
}
body{
   background-color:lightgrey;			

}

</style>
</head>

<a href='frontpage.php'><button class="buttons button1">HOME</button></a>

<body>




<h2><center>purchaser info</center></h2>
<center>
<table>
  <tr>
  <th> Invoice</th>
    <th>purchaer date</th>
	<th>Brick id</th>
       <th>purchaser name</th>
         <th>quantity</th>
          <th>Total cost</th>

<tr>
<?php  
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);
if($db)
echo("success");
else
echo("na hua success"); 
  
  

$q='select invoice, p_date, brick_id, p_name, quantity, 3*quantity as total_cost from purchase';
$r=mysqli_query($db,$q);

  while($row=mysqli_fetch_assoc($r))
	{     echo("<tr>");
	   echo("<td>");
	    echo($row['invoice']);
           echo("</td>");
		echo("<td>");
	  echo($row['p_date']);
      echo("</td>");
	  echo("<td>");
	  echo($row['brick_id']);
	  echo("</td>");
echo("<td>");
	  echo($row['p_name']);
	  echo("</td>");
	  
echo("<td>");
	  echo($row['quantity']);
	  echo("</td>");
	  
        echo("<td>");
	    echo($row['total_cost']);
	    echo("</td>");

	  
	    echo("</tr>");
	    echo("<br>");
	
	}

?>

</table>
</center>
</body>
</html>
