<html>
<style>

input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
h1{
    border:2px solid #1a1a1d;           
    background-color:#950740;
    padding: 15px 32px;
    font-size: 100px;
    margin: 6px 4px;
}
.center {
    color:white;                
   text-align:center;
    font-family:OCR A Std, monospace;
}
.button1 {
    background-color:royalblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 12px 0 6px 0;
}

img.avatar {
    width: 30%;
    border-radius: 80%;
}
h2{
    color:white;
    font-family: Andale Mono, monospace;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<head>
<div class="center">
<h1>Login Form</h1>
</div>
</head>
<center>

<body bgcolor=#1a1a1d>
<form  action='login1.php' method='post'>
<div class="imgcontainer"><br>
  </div>

<h2>User id</h2><br>
<input type='text' name='user' placeholder='enter id..' size=40><br/>
<h2>Password</h2><br>
<input type='password' name='pass' placeholder='password...'size=40/><br/>

<input class='button1' type='submit' value='login'>
<br/>


<?php
$user='root';
$pass='';
$db='brick_db';
$db=mysqli_connect('localhost',$user,$pass,$db);


if(isset($_POST['user']))
{
	$input1=$_POST['user'];
	$input2=$_POST['pass'];
	
$r=	"select userid,password from users where userid='$input1' AND password='$input2'";
$q=mysqli_query($db,$r);

if(mysqli_num_rows($q)>0)
{
  header('location:frontpage.php');
}
else
	echo("fail");
}
?>

</form>
</body>
</center>
</html>