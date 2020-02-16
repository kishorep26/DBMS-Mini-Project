<html>
<head>
<style>

body{
   background-color:#1a1a1d;			
  // style="background-image:C:\Users\Aniket Kumar\Desktop\Project(rice.png)";
}
.center {
    color:white;				
   text-align:center;
    font-family:OCR A Std, monospace;
  }
h1{
    border:2px solid #1a1a1d;			
    background-color:#950740;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    
    background-color: #f1f1f1;
    border: 1px solid #555;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    border: 1px solid #555;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 1px solid #555;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
.dropbtn {
    background-color: #950740; /* Green */
    border: 2px #1a1a1d;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 6px 4px;
    cursor: pointer;
    font-family: Andale Mono, monospace;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:white;/*color for production*/
    min-width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    text-align: left;
    z-index: 1;
    font-family: Andale Mono, monospace;

}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #cccccc;/*dropdown color*/
    color: black;
}
.button{border-radius:8px;}
.button{width:250px;}

img {
    width:252px;
    height:400px;
    object-fit:cover;
text-align:bottom;
padding-top:2px;
background-image:url(engineering.jpg);
background-size:100% auto;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: right;
  font-family: Andale Mono, monospace;
}

</style>
</head>



<body>
<div class='center'>
	<h1><b>BRICK LANE</b></h1>
</div>
<center>
<div class="dropdown">
  <button class="dropbtn button">Workers</button>
  <div class="dropdown-content">
    <a href="worker1.php">Insert worker</a>
    <a href="edit2.php">Edit</a>
    <a href="display1.php">Search</a>
    <a href="delete1.php">Delete worker</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn button">Production</button>
  <div class="dropdown-content">
    <a href="production1.php">Insert details</a>
    <a href="prod_details.php">Display</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn button">Purchaser</button>
  <div class="dropdown-content">
    <a href="purchase1.php">Insert purchaser</a>
     <a href="pur_details.php">Display</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn button">Supplies</button>
  <div class="dropdown-content">
    <a href="supplies1.php">Details</a>
    <a href="sup_details.php">Display</a>
   
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn button">Acc Section</button>
  <div class="dropdown-content">
    <a href="account1.php">Insert</a>
    <a href="acc_details.php">Information</a>
  </div>
</div>
<br>
</center>
</body>

<div img src="brick.jpg">

</div>
</html>
