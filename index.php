<?php 

$host="localhost";
$user="root";
$password="";
$db="acumen";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
	if(mysql_num_rows($result)==1)
	{		
		header('Location: welcome.html');
		exit();

    }
    else{
		echo"<h1>INVALID CREDENTIALS</h1>";
		exit();
    }
        
}
?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
        body{
	margin: 0 auto;
	background-image: url("bg1.jpg");
	width:100%
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 550px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
.btn-login:hover {
  opacity: 1;
}
.icon {
  padding: 15px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
    </style>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
   
	<div class="container">
    <img src="mahesh.png"/>
    <font color = "white">
    <h1>MAHESH STORES</h1>
    <div align="right">
            <b><I><h2>..........................of the students<br>..........................by the students<br>..........................for the students</h2>
                </I></b></div>
            </font>
		<form method="POST" action="#">
			<div class="form-input">
                <i class="fa fa-user icon"></i>
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
                <i class="fa fa-key icon"></i>
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
