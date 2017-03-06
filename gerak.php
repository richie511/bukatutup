<?php
mysql_connect("localhost","root","");
mysql_select_db("db_gerbang");
$kon = mysql_select_db("db_gerbang");
if (!$kon) {
	echo "Gagal Koneksi";
}

if ($_POST[nilai] == 1) {
	mysql_query("TRUNCATE status ");
	mysql_query("INSERT INTO status (nilai) VALUES('1')");
}
if ($_POST[nilai] == 0) {
	mysql_query("TRUNCATE status ");
	mysql_query("INSERT INTO status (nilai) VALUES('0')");
}
?>