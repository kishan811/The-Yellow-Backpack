<?php

$con = mysql_connect('localhost','root','');
mysql_select_db('tybp', $con);

$result1 = mysql_query("SELECT * FROM logs ORDER BY id DESC");

while($extract = mysql_fetch_array($result1)) {
	echo "<span><font color=red>" . $extract['username'] . "</span>: </br> <span><font color=white>" . $extract['msg'] . "</span><br />"."</br>";
}
?>
