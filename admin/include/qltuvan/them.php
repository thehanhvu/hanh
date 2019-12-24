<form action="include/qltuvan/xuly.php" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM MỤC TƯ VẤN</td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">Tiêu đề</td>
    <td width="75%"><input type="text" name="tieuDe" size="20"></td>
  </tr>
  <tr>
    <td class="tieudenho">Hình ảnh</td>
    <td><input type="file" name="anhMinhHoa"></td>
  </tr>
  <tr>
    <td class="tieudenho">Nội dung</td>
    <td><textarea id="noidung" name="noiDung" cols="60" rows="30"></textarea></td>
  </tr>
  <tr>
     <td align="center">&nbsp;</td>
    <td><input type="submit" class="submit" name="them" value="Thêm" /></td>
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'noidung' );
</script>