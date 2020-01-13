<?
$maychu = "localhost";
$taikhoan = "root";
$matkhau ="tuanninh1";
$csdl = "sango";
$connect = mysql_connect($maychu,$taikhoan,$matkhau);
mysql_select_db($csdl,$connect);
?>