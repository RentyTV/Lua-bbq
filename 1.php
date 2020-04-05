<?php
	if($_GET['a'] == "none"){
		file_put_contents("1.txt", "0_".$_GET['a']."");
	}
	else
	{
		file_put_contents("1.txt", "1_".$_GET['a']."");
	}
