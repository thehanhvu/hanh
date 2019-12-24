<?
$id = $_GET["id"];
$sql = "select * from sanpham where idSanPham = $id";
$tb = mysql_query($sql);
$rs = mysql_fetch_array($tb);
$sql1 = "select * from danhmuc";
$tb1 = mysql_query($sql1);

 ?>
<form action="include/qlsanpham/xuly.php?id=<? echo $id;?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM SẢN PHẨM</td>
  </tr>
  <tr>
    <td class="tieudenho">Tên sản phẩm</td>
    <td><input type="text" name="tenSanPham" value="<? echo $rs["tenSanPham"];?>" /></td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">Danh mục SP</td>
    <td width="75%"><select name="danhMuc">
      <? 
	while($rs1 = mysql_fetch_array($tb1)){?>
      <option value="<? echo $rs1["idDanhMuc"];?>"><? echo $rs1["tenDanhMuc"];?></option>
      <? }
	?>
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">Xuất xứ</td>
    <td><input type="text" name="xuatXu" size="50" value="<? echo $rs["xuatXu"];?>"></td>
  </tr>
  <tr>
    <td class="tieudenho">Đặc diểm</td>
    <td><input type="text" name="dacDiem" size="50" value="<? echo $rs["dacDiem"];?>"></td>
  </tr>
  <tr>
    <td class="tieudenho">Nguồn</td>
    <td><textarea id="nguon" name="nguon" cols="60" rows="30" ><? echo $rs["nguon"];?></textarea></td>
  </tr>
  <tr>
    <td class="tieudenho">Giá gốc</td>
    <td><input type="text" name="giaGoc" size="20" value="<? echo $rs["giaGoc"];?>"></td>
  </tr>
  <tr>
    <td class="tieudenho">Giá khuyến mại</td>
    <td><input type="text" name="giaKhuyenMai" size="20" value="<? echo $rs["giaKhuyemMai"];?>"></td>
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
    <td ><input type="submit" class="submit" name="sua" value="Sửa"> <input type="submit" class="submit" name="xoa" value="Xóa"></td> 
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'nguon' );
</script>
