<div class="container main">
	<div class="row">
<? /************* SLIDE *****************************/ ?>
	<? include("include/slide.php");?>
 	</div>	   
<? /************* SAN PHAM *****************************/ ?>
	<div class="row no-padding">
<?
	$sql = "select idDanhMuc, tenDanhMuc from danhmuc order by thuTu ASC ";
	$tb = mysql_query($sql);
	while($rs = mysql_fetch_array($tb)){ ?>
    
		<div class="col-sm-12 col-md-12 col-lg-12 tieude no-padding"><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><i class="glyphicon glyphicon-th"></i><? echo $rs["tenDanhMuc"];?></a>
        </div>
        <? $sql1 = "select * from sanpham where idDanhMuc ='$rs[idDanhMuc]' order by idSanPham DESC limit 0,4";
			$tb1= mysql_query($sql1);
			while ($rs1 = mysql_fetch_array($tb1)){?>
				<div class="col-sm-3 col-md-3 col-lg-3 main1 thumbnail">
                    <div class="image"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs1["idSanPham"];?>"><img class="img-rounded" src="<? echo $rs1["hinhAnh"];?>" width="250px" height="250px" /></a></div>
                    <div class="thongtin"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs1["idSanPham"];?>"><? echo $rs1["tenSanPham"];?></a></div>       
    			</div>
		<? }?>
        <div class="them"><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>">Xem thêm...</a></div>
<? }?>
	</div>
</div>
<div class="clr"></div>
