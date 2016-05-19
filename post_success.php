<?php

require 'core.inc.php';
require 'mysql_connect.php';
require 'logout_temp.php';

if(isset($_POST['postbox']) && isset($_POST['posttitle']))
{	
    $post_title = $_POST['posttitle'];
    $postbox = $_POST['postbox']; 
	

    if(!empty($post_title) && !empty($postbox))
    {
	    $logged_username = get_field('username');
        $query1 = "CREATE TABLE  `".$post_title."` 
		        (
					`id` INT( 11 ) AUTO_INCREMENT ,
					`username` VARCHAR( 35 ) ,
					`comment` VARCHAR( 100 ) ,
					`liked` INT( 11 ) ,
					PRIMARY KEY (  `id` )
				);";
		$query2 = "INSERT INTO `all_post` VALUES ('', '".$post_title."', '".$postbox."', '".$logged_username."')";
		$query_run1 = mysql_query($query1);
		$query_run2 = mysql_query($query2);		
    }
}
?>
<html>

<head>
<style type="text/css">
	    #posttitle {position: absolute;
		             color: white;
				     top: 20%;
				     left: 25%;
		            }
	    #postbox {position: absolute;
		           color: white;
				   top: 30%;
				   left: 25%;
				  }		
		body {background-image:url(background_image.jpg);background-position:center;
				   }		  
</style>
</head>

<body>
    <div id="posttitle"> <br> <input type="text" disabled="disabled" value= "<?php echo $_POST['posttitle']; ?>"name="posttitle" size="105" /> </div>
    <div id="postbox"> <br> <textarea  disabled="disabled"  name="postbox" rows="20" cols="80"> <?php echo $_POST['postbox']; ?> </textarea> </div>
	<div > <a href="all_post.php"> Show All Post </a> </div>
</body>

</html>