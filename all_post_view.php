<?php
require 'core.inc.php';
require 'mysql_connect.php';
require 'logout_temp.php';
$test = $_GET["post"];
$query = "SELECT `posted_by` FROM `all_post` WHERE `post_name`='$test'";
$query_run=mysql_query($query);
$writer_name = mysql_result($query_run, 0, 'posted_by');
?>

<html>

<head>
<style type="text/css">
	    #posttitle {position: absolute;
		             color: blue;
				     top: 20%;
				     left: 25%;
		            }
	    #postbox {position: absolute;
		           color: blue;
				   top: 30%;
				   left: 25%;
				  }			
</style>
</head>

<body>
    <div > <a href="all_post.php"> Show All Post </a> </div>
    <div id="posttitle"></br><?php echo $writer_name;?></br><input type="text" disabled="disabled" value= "<?php
	echo $test;
	?>	
	"name="posttitle" size="105" /> </div>
    <div id="postbox"> <br> <textarea  disabled="disabled"  name="postbox" rows="20" cols="80"><?php
	$query = "SELECT `post` FROM `all_post` WHERE `post_name`='$test'";
	$query_run=mysql_query($query);
	$selected_post = mysql_result($query_run, 0, 'post');
	echo $selected_post;
	?>	
	</textarea> </div>
</body>

</html>



<?php
if(isset($_POST['like']) && isset($_POST['comment_box']))
{	
    $like = $_POST['like'];
    $comment_box = $_POST['comment_box']; 
	$logged_username = get_field('username');
	if(!empty($like))
    {
	    if ($like==-1)
		{
		$query4="DELET FROM '$test' WHERE `posted_by`='logged_username' AND `liked`=1";
        mysql_query($query4);
		}
		else
		{
        $query1 = "INSERT INTO `$test` VALUES ('', '".$logged_username."','', '".$like."')";
		if($query_run1 = mysql_query($query1))
		{?>
		<html>
		<head>
		<style type="text/css">
		#post{position: absolute;color: blue;top: 18%;left: 25%;}	
		</style>
		</head>
		<body>
		<div id="post">You rated this post</div>
		</body>
		</html>
        <?php	 
	    }}
    }
	if(!empty($comment_box))
    {
        $query2 = "INSERT INTO `$test` VALUES ('', '".$logged_username."', '".$comment_box."', '')";
		if($query_run2 = mysql_query($query2))
		{?>
		<html>
		<head>
		<style type="text/css">
		#post{position: absolute;color: blue;top: 18%;left: 25%;}	
		</style>
		</head>
	    <body>
	    <div id="post">You commented on this post</div>
	    </body>
	    </html>
	    <?php
	    }
    }
	
}
?>
<html>
<head>	
<style type="text/css">
#like{position: absolute;top: 90%;left: 25%;}
#cooment{position: absolute;top: 95%;left: 25%}
</style>		  
</head>
<body>
<form  action="" method="POST">
<div id="like"><input type="radio" name="like" value="1" />LIKE
<?php
$logged_username = get_field('username');
$query="SELECT `id` FROM `$test` WHERE `liked`='1' AND `posted_by`='$logged_username'";
if ($query_run = mysql_query($query))
{
$query_num_rows = mysql_num_rows($query_run);
if($query_num_rows>=1)
{
?>
<div style="position: absolute;top: 90%;left: 25%;"><input type="radio" name="like" value="-1" />UNLIKE</div><?php }}
$query="SELECT `id` FROM '$test' WHERE `liked`=1";
if ($query_run = mysql_query($query))
{
$query_num_rows = mysql_num_rows($query_run);
?>
<div style="position: absolute; top: 95%; left: 40%;"><h4><?php echo $query_num_rows;}?>  likes</h4></div>
<div style="position: absolute; top: 95%; left: 25%;"><h4>Comment Here</h4></br><textarea name="comment_box" rows="2" cols="80"></textarea></br>
<input type="submit" value="submit"/></div>
</form>
</body>
</html>
