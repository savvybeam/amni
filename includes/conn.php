<?php

	$con=mysql_connect('localhost','root','');
	if(!isset($con))
		{
			die("connection failed");
		}
			$db=mysql_select_db('amnipdc',$con);
				if(!isset($db))
					{
						die("DB not available");
					}
?>
