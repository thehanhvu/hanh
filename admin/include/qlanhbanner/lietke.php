<? 
$sql = "select * from anhbanner order by thuTu ASC";
$tb = mysql_query($sql);
?>
<table class ="tblietke" border="1" cellspacing="0" cellpadding="0">
  <tr class="tr">
    <td class="td" width="5%">STT</td>
    <td class="td" width="18%">Tên ảnh</td>
    <td class="td" width="18%">Hình ảnh</td>
    <td class="td" width="8%">Thứ tự</td>
    <td class="td" width="7%">Chọn</td>
  </tr>
 <?
 $i=0;
 while($rs = mysql_fetch_array($tb)){$i=$i+1; ?>
 
  <tr class="tr">
    <td class="td_duoi"><? echo $i ?></td>
    <td class="td_duoi"><? echo $rs["tenAnh"]?></td>
    <td class="td_duoi"><img src="../<? echo $rs["url"];?>" width="100px" height="100px" /></td>
    <td class="td_duoi"><? echo $rs["thuTu"]?></td>    
    <td class="td_duoi"><a href="index.php?quanly=qlanhbanner&act=sua&id=<? echo $rs["idAnh"]?>">Sửa</a></td>
  </tr>
  <? } ?>
</table>
