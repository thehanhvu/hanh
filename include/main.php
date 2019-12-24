
<? /************* SLIDE *****************************/ ?>
	<? include("include/slide.php");?>
<div class="container">
	<div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 main">	   
<? /************* SAN PHAM *****************************/ ?>
<?
	$sql = "select idDanhMuc, tenDanhMuc from danhmuc order by thuTu ASC ";
	$tb = mysql_query($sql);
	while($rs = mysql_fetch_array($tb)){ ?>
    
		<div class="tieude"><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><i class="fas fa-th-large"></i><? echo $rs["tenDanhMuc"];?></a></div>
        <? $sql1 = "select * from sanpham where idDanhMuc ='$rs[idDanhMuc]' order by idSanPham DESC limit 0,4";
			$tb1= mysql_query($sql1);
			while ($rs1 = mysql_fetch_array($tb1)){?>
				<div class="col-sm-3 col-md-3 col-lg-3 main1">
                    <div class="image"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs1["idSanPham"];?>"><img src="<? echo $rs1["hinhAnh"];?>" width="250px" height="250px" /></a></div>
                    <div class="thongtin"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs1["idSanPham"];?>"><? echo $rs1["tenSanPham"];?></a></div>       
    			</div>
		<? }?>
        <div class="them"><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>">Xem thêm...</a></div>
<? }?>
			</div>
	</div>

</div>
<div class="clr"></div>
