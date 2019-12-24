
<?
$xem = $_GET["xem"];
if($xem =="chitiet"){
	include("include/chitiet.php");
	}
else if($xem=="danhmuc"){
	include("include/danhmuc.php");
	}
else if($xem=="tuvan"){
	include("include/tuvan.php");
	}
	else if($xem=="tvchitiet"){
	include("include/tvchitiet.php");
	}
else if($xem=="lienhe"){
	include("include/lienhe.php");
	}
else{
	include("include/main.php");
	}
?>
