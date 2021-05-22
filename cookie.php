<?php


if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>
<h1>Redirecting in 3 seconds...</h1>

<meta http-equiv="refresh" content="3;url=indexxx.php" />
    
   <p><a href="login.php"> Go to Login Page </a> </p>