<?php

$showalert=false;

if($_server["request_method"]=="post"){
	include 'dbcon.php';
    $username = $_post["username"];
    $passward = $_post["password"];
    $exist=false;

    $sql="SELECT * FROM user WHERE username='$username' AND password=$password'";
    $result=mysqli_query($conn,$sql);
    $result = myqli_query($conn, $sql);
    $num =mysqli_num_query($result);

    if ($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION[username]=$username;
        heder("location: mess.html");
    }


}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insta_web_sign_up </title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<div class="bbox">
		
		<form action="log.html" class="box" method="post">
			<input type="phone-number" id="number" class="num" name="number" placeholder="  enter your number" >
			<input type="username" id="uname" class="uname" name="uname" placeholder="  enter unique username" >
			<input type="name" id="name" class="name" name="name" placeholder="  enter your name" >
			<input type="password" id="pass" class="pass" name="pass" placeholder="  enter password" >
			<div class="do">
				<a href="login.html"> allready sign up ,click to login</a>
				<button class="bt">submit</button>
			</div>
		</form>
		
	</div>

</body>
</html>