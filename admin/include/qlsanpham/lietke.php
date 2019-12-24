<? 
$sql = "select * from sanpham order by idSanPham ASC";
$tb = mysql_query($sql);
?>
<table class ="tblietke" border="1" cellspacing="0" cellpadding="0">
  <tr class="tr">
    <td class="td" width="5%">Stt</td>
    <td class="td" width="18%">Tên sản phẩm</td>
    <td class="td" width="10%">Xuất xứ</td>
    <td class="td" width="15%">Đặc điểm</td>
    <td class="td" width="18%">Nguồn</td>
    <td class="td" width="10%">Giá gốc</td>
    <td class="td" width="10%">Giá khuyến mại</td>
    <td class="td" width="18%">SP nổi bật</td>
    <td class="td" width="20%">Hình ảnh</td>
    <td class="td" width="12%">Người nhập</td>
    <td class="td" width="12%">Ngày nhập</td>
    <td class="td" width="7%">Chọn</td>
  </tr>
 <?
 $i=0;
 while($rs = mysql_fetch_array($tb)){$i=$i+1; ?>
 
  <tr class="tr">
    <td class="td_duoi"><? echo $i ?></td>
    <td class="td_duoi"><? echo $rs["tenSanPham"]?></td>
    <td class="td_duoi"><? echo $rs["xuatXu"]?></td>
    <td class="td_duoi"><? echo $rs["dacDiem"]?></td>
    <td class="td_duoi"><? echo $rs["nguon"]?></td>
    <td class="td_duoi"><? echo $rs["giaGoc"]?></td>
    <td class="td_duoi"><? echo $rs["giaKhuyenMai"]?></td>
    <td class="td_duoi"><? if($rs["spNoiBat"]==1){echo "Nổi bật";}else if($rs["spNoiBat"]==0){echo "Không nổi bật";}?></td>
    <td class="td_duoi"><img src="../<? echo $rs["hinhAnh"];?>" width="35px" height="30px" /></td>
    <td class="td_duoi"><? echo $rs["nguoiNhap"]?></td>
    <td class="td_duoi"><? echo $rs["ngayNhap"]?></td>
    <td class="td_duoi"><a href="index.php?quanly=qlsanpham&act=sua&id=<? echo $rs["idSanPham"]?>">Sửa</a></td>
  </tr>
  <? } ?>
</table>
