<? 
$sql = "select * from tuvan  order by idBaiViet ASC";
$tb = mysql_query($sql);
$idBaiViet = $_GET["idBaiViet"];
$show=$_GET["show"];
?>
<div class="tuvan">
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
        <?
		if($idBaiViet!=""){ $sql1 = "select * from tuvan where idBaiViet = '$idBaiViet'";}
		else{$sql1 = "select * from tuvan order by idBaiViet ASC limit 0,6";}
			$tb1= mysql_query($sql1);
			while($rs1 = mysql_fetch_array($tb1)){?>
				<div class="baiviet">
                	<div class="tieude1"><a><? echo $rs1["tieuDe"];?></a></div>
                    <div class="anhminhhoa"><a><img src="<? echo $rs1["anhMinhHoa"];?>"/></a></div>
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
<div class="clr"></div>