<div class="main">
<?
$quanly = $_GET["quanly"];
if($quanly=="qldanhmuc"){include("qldanhmuc/main.php");}
else if($quanly=="qlsanpham"){include("qlsanpham/main.php");}
else if($quanly=="qlanhbanner"){include("qlanhbanner/main.php");}
else if($quanly=="qluser"){include("qluser/main.php");}
else if($quanly=="qltuvan"){include("qltuvan/main.php");}
?>
</div>
<div class="xoa"></div>