<? 
$sql = "select * from tuvan order by idBaiViet ASC";
$tb = mysql_query($sql);
?>
<table class ="tblietke" border="1" cellspacing="0" cellpadding="0">
  <tr class="tr">
    <td class="td" width="5%">STT</td>
    <td class="td" width="18%">Tiêu đề</td>
    <td class="td" width="18%">Hình ảnh</td>
    <td class="td" width="50%">Nội Dung</td>
    <td class="td" width="7%">Chọn</td>
  </tr>
 <?
 $i=0;
 while($rs = mysql_fetch_array($tb)){$i=$i+1; ?>
 
  <tr class="tr">
    <td class="td_duoi"><? echo $i ?></td>
    <td class="td_duoi"><? echo $rs["tieuDe"]?></td>
    <td class="td_duoi"><img src="../<? echo $rs["anhMinhHoa"];?>" width="100px" height="100px" /></td>
    <td class="td_duoi"><? echo $rs["noiDung"]?></td>    
    <td class="td_duoi"><a href="index.php?quanly=qltuvan&act=sua&id=<? echo $rs["idBaiViet"]?>">Sửa</a></td>
  </tr>
  <? } ?>
</table>
