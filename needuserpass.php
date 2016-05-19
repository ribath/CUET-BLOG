<?php

?>

<html>

<head>
    <style type="text/css">
	    #username {position: absolute;
		           color: blue;
				   top: 55%;
				   left: 40%;
				   }
		#needuser {position: absolute;
		           color: red;
		           top: 55%;
				   left: 60%;
				   }
		#password {position: absolute;
		           color: blue;
				   top: 60%;
				   left: 40%;
				   }
	    #needpass {position: absolute;
		           color: red;
		           top: 60%;
				   left: 60%;
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
<form   method="POST">
    <div id="username"> Username : <input type="text" name="username" size="25" value=""/> </div>
    <div id="password"> Password : <input type="password" name="password" size="25" /> </div>
	<div id="signup"> If you don't have a ID yet  <a href="signup.php"> Sign Up </a> </div>
    <div id="login"> <input type="submit" value="Log in" /> </div>
	
	<div id="needuser"> * You must supply a valid username * </div>
	<div id="needpass"> * write your password * </div>
</form>	
</body>

</html>