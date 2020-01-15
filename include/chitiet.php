<?
$idSanPham = $_GET["idsanpham"];
$sql = "select * from sanpham where idSanPham = '$idSanPham'";
$tb = mysql_query($sql);
$rs = mysql_fetch_array($tb);
?>
<div class="container">
	<div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 chitiet">
            <div class="col-sm-6 col-md-6 col-lg-6 mainleft thumbnail"><img src="<? echo $rs["hinhAnh"];?>" width="100%"></div>
            <div class="col-sm-6 col-md-6 col-lg-6 mainright thumbnail">
                <h3><? echo $rs["tenSanPham"]?></h3>
                <p><? echo $rs["xuatXu"]?></p>
                <p><? echo $rs["dacDiem"]?></p>
                <p><? echo $rs["nguon"]?></p>   
            </div>
		</div>
	</div>
    <div class="clr"></div>
</div>
<div class="clr"></div>