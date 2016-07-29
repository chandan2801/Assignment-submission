<?php
	ob_start();
	@session_start();
	require 'connect.inc.php';
	$current_file=$_SERVER['SCRIPT_NAME'];
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
	{
		$http_referer=$_SERVER['HTTP_REFERER'];
	}
	function logged_in1()
	{
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getuserfields($field)
	{
		require 'connect.inc.php';
		$query="SELECT $field from Faculty where id='".$_SESSION['user_id']."'";
		if($query_run=mysqli_query($handle,$query))
		{
			while($query_row=mysqli_fetch_assoc($query_run))
			{
				return $query_row[$field];
			}
		}
	}
?>