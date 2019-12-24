<?
$act = $_GET["act"];
if($act == "them"){
	include("include/qluser/them.php");}
else if($act == "sua"){
	include("include/qluser/sua.php");}
include("include/qluser/lietke.php");
?>