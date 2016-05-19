<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

function login_check()
{
    if(isset($_SESSION['logged_userid']) && !empty($_SESSION['logged_userid']))
	{
	    return true;
	}
	else
	{
	    return false;
	}
}

function get_field($field)
{
    $query = "SELECT `$field` FROM `sign_up_form` WHERE `ID`='".$_SESSION['logged_userid']."'";
	if($query_run=mysql_query($query))
	{
	    if ($query_result = mysql_result($query_run, 0, $field))
		{
		    return $query_result;
		}
	}
}

?>