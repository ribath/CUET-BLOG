<?php

if(isset($_POST['username']) && isset($_POST['password']))
{ 
    $username = $_POST['username']; 
    $password = $_POST['password'];
	
	$password_hash = md5($password);
	
	if(empty($username))
	{
	    require 'needuserpass.php';
	}
	else if(empty($password) && !empty($username))
	{
	    require 'needpass.php'; 
	}
	
	else if(!empty($password) && !empty($username))
	{
	    $query = "SELECT `ID`, `firstname` FROM `sign_up_form` WHERE `username`='$username' AND `password`='$password_hash'";
		if($query_run=mysql_query($query))
		{ 
		    $query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows==0)
		    {
		        echo 'Invalid Username / Password Combination';
		    }
		    if($query_num_rows==1)
		    {
			    $logged_userid = mysql_result($query_run, 0, 'ID');
         	    $logged_user_firstname = mysql_result($query_run, 0, 'firstname');
				$_SESSION['logged_userid'] = $logged_userid;
				header('Location: homepage.php');
		    }
		}
	}
}
?>
<html>

<head>
    <style type="text/css">
	    #username {position: absolute;
		           color: blue;
				   top: 55%;
				   left: 40%;
				   }
		#password {position: absolute;
		           color: blue;
				   top: 60%;
				   left: 40%;
				   }
		#signup {position: absolute;
		         top: 70%;
				 left: 45%;
				 }
        #login {position: absolute;
		         top: 65%;
				 left: 45%;
				 }
	</style>
</head>

<body>
<form  action="<?php echo $current_file; ?>" method="POST">
    <div id="username"> Username : <input type="text" name="username" size="25" value=""/> </div>
    <div id="password"> Password : <input type="password" name="password" size="25" /> </div>
	<div id="signup"> If you don't have a ID yet  <a href="signup_form.php"> Sign Up </a> </div>
    <div id="login"> <input type="submit" value="Log in" /> </div>
</form>	
</body>
</html>	