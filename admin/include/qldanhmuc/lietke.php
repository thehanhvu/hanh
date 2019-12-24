<? 
$sql = "select * from danhmuc order by thuTu ASC";
$tb = mysql_query($sql);
?>
<table class ="tblietke" border="1" cellspacing="0" cellpadding="0">
  <tr class="tr">
    <td class="td" width="5%">STT</td>
    <td class="td" width="18%">Tên danh mục</td>
    <td class="td" width="8%">Thứ Tự</td>
    <td class="td" width="18%">Trạng thái</td>
    <td class="td" width="7%">Chọn</td>
  </tr>
 <?
 $i=0;
 while($rs = mysql_fetch_array($tb)){$i=$i+1; ?>
 
  <tr class="tr">
    <td class="td_duoi"><? echo $i ?></td>
    <td class="td_duoi"><? echo $rs["tenDanhMuc"]?></td>
    <td class="td_duoi"><? echo $rs["thuTu"]?></td>
    <td class="td_duoi"><? if($rs["trangThai"]==1){echo "Sử dụng";}else if($rs["trangThai"]==0){echo "Không sử dụng";}?></td>
    
    <td class="td_duoi"><a href="index.php?quanly=qldanhmuc&act=sua&id=<? echo $rs["idDanhMuc"]?>">Sửa</a></td>
  </tr>
  <? } ?>
</table>
