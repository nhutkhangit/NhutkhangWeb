<?php
$db = @mysql_connect("localhost","root","");
if(!$db)
{
	echo "Không kết nối được với CSDL.";
	exit();
}
else
	mysql_select_db("nissan3s");
mysql_set_charset("utf8");

?>