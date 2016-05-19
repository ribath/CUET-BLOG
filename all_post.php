<?php
require 'core.inc.php';
require 'mysql_connect.php';
require 'logout_temp.php';

$query="SELECT * FROM `all_post`";
$result = mysql_query($query); 

while($row = mysql_fetch_array( $result )) 
{
?>
    <p>
	<a href="all_post_view.php?post=<?php echo $row['post_name']; ?>" >
	<?php echo $row['post_name']; ?>
	</a>
	</p>
	
<?php
} 
?>

<html>

<head>
</head>

<body>
</body>

</html>