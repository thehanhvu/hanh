
<?
    $trang = $_GET["trang"];
    if($trang == "" or $trang == 0){$trang = 1;}
    $soluong = 4;
    $batdau = ($trang - 1)*$soluong;
    $iddanhmuc = $_GET["iddanhmuc"];
	$tbdanhmuc = mysql_query("select tenDanhMuc from danhmuc where idDanhMuc = '$iddanhmuc'");
	$rsdanhmuc = mysql_fetch_array($tbdanhmuc);
?>
<div class="container">
 	<div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 tieude no-padding"><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><i class="glyphicon glyphicon-th"></i><? echo $rs["tenDanhMuc"];?></a>
        </div>

<? 
$sql = "select * from sanpham where idDanhMuc = '$iddanhmuc' order by idSanPham ASC limit $batdau,$soluong";
$tb = mysql_query($sql);

?>
    <? while($rs=mysql_fetch_array($tb)){?> 
        <div class="col-sm-3 col-md-3 col-lg-3 main1">
            <div class="image"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs["idSanPham"];?>"><img src="<? echo $rs["hinhAnh"];?>" width="250px" height="250px" /></a></div>
            <div class="thongtin"><a href="index.php?xem=chitiet&idsanpham=<? echo $rs["idSanPham"];?>"><? echo $rs["tenSanPham"];?></a></div>
        </div>
    <? }?> 
  
<div class="clr"></div>
<? 
	$sql2 = "select 1 from sanpham where idDanhMuc ='$iddanhmuc'";
    $tb2 = mysql_query($sql2);
	$sotrang = ceil(mysql_num_rows($tb2)/$soluong);

?>

<? //Phân trang ở dưới?>

	<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 trang">
            <ul>
                <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $iddanhmuc;?>&trang=1"> First </a></li>
                <?
                if($sotrang <= 10){$batdau=1;$ketthuc=$sotrang;}
                else {
                    if($trang<5){$batdau=1;$ketthuc=10;}
                    else if($trang+5 > $sotrang){$batdau=$sotrang-9;$ketthuc=$sotrang;}
                    else{$batdau=$trang-4;$ketthuc=$trang+5;}
                }
                for($i=$batdau; $i<=$ketthuc; $i++){?>
                    <? if($trang == $i){echo "<li class='liactive'>";}else{echo "<li>";}?><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $iddanhmuc;?>&trang=<? echo $i;?>"> <? echo $i;?> </a></li>
                <? }?>
                <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $iddanhmuc;?>&trang=<? echo $sotrang;?>")"> End </a></li>
            </ul>
        </div>
	</div>

<div class="clr"></div>

<div class="dacdiem">
<? 
    $sql1 = "select dacDiem from danhmuc where idDanhMuc ='$iddanhmuc'";
    $tb1 = mysql_query($sql1); $rs1 = mysql_fetch_array($tb1);
    echo $rs1["dacDiem"];
?>

</div>
</div> 
