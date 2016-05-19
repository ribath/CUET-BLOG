<?php 

require 'core.inc.php';
require 'mysql_connect.php';

if(login_check())
{?>
    <html> <div style="position: absolute; top: 10%; left: 39%;"><?php echo 'Mr. ';echo get_field('firstname');echo ' you\'ve logged in succesfully';?></div></html>
    <?php 
    
	require 'logout_temp.php';
	require 'userprofile.php';
}
else
{
    require 'loginform.php';
}

?> 
<html>
<head>
<style type="text/css">
	           body {background-image:url(background_image.jpg);background-position:center;
				   }
</style>
</head>
<body>
<div style="position: absolute;top: 2%;left: 25%" align="center"><img src="cuet_blogging_site.png" alt="" align="middle"></div>
</body>
</html>