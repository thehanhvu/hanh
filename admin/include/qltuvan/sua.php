<?
$id = $_GET["id"];
$sql = "select * from tuvan where idBaiViet = $id";
$tb = mysql_query($sql);
$rs = mysql_fetch_array($tb);

 ?>
<form action="include/qltuvan/xuly.php?id=<? echo $id;?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM MỤC TƯ VẤN</td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">Tiêu đề</td>
    <td width="75%"><input type="text" name="tieuDe" size="50" value="<? echo $rs["tieuDe"]?>"></td>
  </tr>
  <tr>
    <td class="tieudenho">Hình ảnh</td>
    <td><input type="file" name="anhMinhHoa" value="<? echo $rs["anhMinhHoa"]?>"></td>
  </tr>
  <td class="tieudenho">Nội dung</td>
    <td><textarea id="noidung" name="noiDung" cols="80" rows="30"><? echo $rs["noiDung"]?></textarea></td>
    <tr>
  	<td align="center">&nbsp;</td>
    <td ><input type="submit" class="submit" name="sua" value="Sửa"> <input type="submit" class="submit" name="xoa" value="Xóa"></td> 
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'noidung' );
</script>