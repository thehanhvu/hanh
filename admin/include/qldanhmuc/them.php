<form action="include/qldanhmuc/xuly.php" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM DANH MỤC</td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">Tên danh mục</td>
    <td width="75%"><input type="text" name="tenDanhMuc" size="20"></td>
  </tr>
   <tr>
    <td class="tieudenho">Nhóm</td>
    <td><select name="idNhom">
        <option value="1">sàn gỗ</option>
        <option value="2">sàn nhựa</option>
        <option value="3">xốp dán tường</option>
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">Thứ tự</td>
    <td><input type="text" name="thuTu" size="5"></td>
  </tr>
  <tr>
    <td class="tieudenho">Trạng thái</td>
    <td><select name="trangThai">
    <option value="1">Sử dụng</option>
    <option value="0">Không sử dụng</option>
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">Đặc điểm</td>
    <td><textarea id="dacdiem" name="dacDiem" cols="60" rows="30"></textarea></td>
  </tr>
  <tr>
     <td align="center">&nbsp;</td>
    <td><input type="submit" class="submit" name="them" value="Thêm" /></td>
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'dacdiem' );
</script>