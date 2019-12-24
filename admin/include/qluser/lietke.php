<? 
$sql = "select * from user order by idUser ASC";
$tb = mysql_query($sql);
?>
<table class ="tblietke" border="1" cellspacing="0" cellpadding="0">
  <tr class="tr">
    <td class="td" width="5%">STT</td>
    <td class="td" width="18%">TÊN USER</td>
    <td class="td" width="8%">PASSWORD</td>
    <td class="td" width="18%">LEVEL</td>
    <td class="td" width="7%">CHỌN</td>
  </tr>
 <?
 $i=0;
 while($rs = mysql_fetch_array($tb)){$i=$i+1; ?>
 
  <tr class="tr">
    <td class="td_duoi"><? echo $i ?></td>
    <td class="td_duoi"><? echo $rs["tenUser"]?></td>
    <td class="td_duoi"><? echo $rs["passWord"]?></td>
    <td class="td_duoi"><? echo $rs["level"]?></td>
    <td class="td_duoi"><a href="index.php?quanly=qluser&act=sua&id=<? echo $rs["idUser"]?>">Sửa</a></td>
  </tr>
  <? } ?>
</table>