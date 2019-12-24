<?
$act = $_GET["act"];
if($act == "them"){
	include("include/qlsanpham/them.php");}
else if($act == "sua"){
	include("include/qlsanpham/sua.php");}
	include("include/qlsanpham/lietke.php");
?>