<? 
$sql = "select * from tuvan  order by idBaiViet ASC";
$tb = mysql_query($sql);
$idBaiViet = $_GET["idBaiViet"];
$show=$_GET["show"];
?>
<div class="container">
	<div class="row no-padding">
        <div class="col-sm-12 col-md-12 col-lg-12 tuvan no-padding">
            <div class="col-sm-3 col-md-3 col-lg-3 menu_tuvan thumbnail no-padding">
                    <p>CÂU HỎI THƯỜNG GẶP</p>
                    <? 
                    while($rs = mysql_fetch_array($tb)){?>
                        <p><a href="index.php?xem=tuvan&idBaiViet=<? echo $rs["idBaiViet"];?>"><? echo $rs["tieuDe"];?></a></p>
                    <? }
                    ?>    
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 nd_tuvan no-padding">
                <?
                if($idBaiViet!=""){ $sql1 = "select * from tuvan where idBaiViet = '$idBaiViet'";}
                else{$sql1 = "select * from tuvan order by idBaiViet ASC limit 0,6";}
                    $tb1= mysql_query($sql1);
                    while($rs1 = mysql_fetch_array($tb1)){?>
                        <div class="baiviet thumbnail no-padding">
                            <div class="tieude1"><a><? echo $rs1["tieuDe"];?></a></div>
                            <div class="anhminhhoa"><a><img src="<? echo $rs1["anhMinhHoa"];?>" width="100%"/></a></div>
                            <div class="noidung"><?
                            $i =300;
                            if($show==""){
                                echo substr($rs1["noiDung"],0,$i)."[...]"; /* cắt 1 phần nd bài viết*/
                                ?><a href="index.php?xem=tuvan&idBaiViet=<? echo $rs1["idBaiViet"];?>&show=full">Đọc tiếp</a><?
                            }
                            else{
                                echo $rs1["noiDung"];
                                }
                            ?>
                            </div>       
                        </div>
           
                <? }?>
             </div>  
    <div class="clr"></div>
    	</div>
	</div> 
</div>
<div class="clr"></div>