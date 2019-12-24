<? 
$sql="select idDanhMuc, tenDanhMuc from danhmuc order by thuTu ASC";
$tb = mysql_query($sql);
?>
<form action="include/qlsanpham/xuly.php" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM SẢN PHẨM</td>
  </tr>
  <tr>
    <td class="tieudenho">Tên sản phẩm</td>
    <td><input type="text" name="tenSanPham" size="20" /></td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">Danh mục SP</td>
    <td width="75%"><select name="danhMuc">
      <? 
	while($rs = mysql_fetch_array($tb)){?>
      <option value="<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></option>
      <? }
	?>
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">Xuất xứ</td>
    <td><input type="text" name="xuatXu" size="50"></td>
  </tr>
  <tr>
    <td class="tieudenho">Đặc diểm</td>
    <td><input type="text" name="dacDiem" size="50"></td>
  </tr>
  <tr>
    <td class="tieudenho">Nguồn</td>
    <td><textarea id="nguon" name="nguon" cols="60" rows="30"></textarea></td>
  </tr>
  <tr>
    <td class="tieudenho">Giá gốc</td>
    <td><input type="text" name="giaGoc" size="20"></td>
  </tr>
  <tr>
    <td class="tieudenho">Giá khuyến mại</td>
    <td><input type="text" name="giaKhuyenMai" size="20"></td>
  </tr>
  <tr>
    <td class="tieudenho">SP nổi bật</td>
    <td><select name="spNoiBat">
    <option value="1">nổi bật</option>
    <option value="0">Không nổi bật</option>
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">Hình ảnh</td>
    <td><input type="file" name="hinhAnh" size="50"></td>
  </tr>


  <tr>
     <td align="center">&nbsp;</td>
    <td><input type="submit" class="submit" name="them" value="Thêm" /></td>
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'nguon' );
</script>