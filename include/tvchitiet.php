<?
$idBaiViet = $_GET["idBaiViet"];
$sql = "select * from tuvan where idBaiViet = '$idBaiViet'";
$tb = mysql_query($sql);
$rs = mysql_fetch_array($tb);
?>
<div class="tvchitiet">
	<div class="menu_tuvan">
    	<ul>
        	<li>CÂU HỎI THƯỜNG GẶP</li>
            <? 
			while($rs = mysql_fetch_array($tb)){?>
				<li><a href="index.php?xem=tuvan&idBaiViet=<? echo $rs["idBaiViet"];?>"><? echo $rs["tieuDe"];?></a></li>
			<? }
			?>    
        </ul>
    </div>
    <div class="nd_tuvan">
        <? $sql1 = "select * from tuvan where idBaiViet = '$idBaiViet'";
			$tb1= mysql_query($sql1);
			while ($rs1 = mysql_fetch_array($tb1)){?>
				<div class="baiviet">
                	<div class="tieude1"><a><? echo $rs1["tieuDe"];?></a></div>
                    <div class="anhminhhoa"><a><img src="<? echo $rs1["anhMinhHoa"];?>"/></a></div>
                    <div class="noidung"><a><? echo $rs1["noiDung"];?></a></div>  
    			</div>
		<? }?>
     </div>
</div>