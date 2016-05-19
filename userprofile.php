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
		#post    {position: absolute;
		           color: white;
				   top: 90%;
				   left: 25%;
				  }
		#allpost {possition: absolute;
		           color: white;
				   top: 15;
				   left: 30;
				 } 
	</style>
</head>

<body>
<form  action="post_success.php" method="POST">
    <div id="posttitle"> Title <br> <input type="text" name="posttitle" size="105" /> </div>
    <div id="postbox"> Write your post here <br> <textarea name="postbox" rows="20" cols="80"> </textarea> </div>
    <div id="post"> <input type="submit" value="Post" /> </div>
	<div id="allpost"> <a href="all_post.php"> Show All Post </a> </div>
</form>	
</body>

</html>