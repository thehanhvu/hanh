<?
$id = $_GET["id"];
$sql = "select * from danhmuc where idDanhMuc = $id";
$tb = mysql_query($sql);
$rs = mysql_fetch_array($tb);

 ?>
<form action="include/qldanhmuc/xuly.php?id=<? echo $id;?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" class="tieude">THÊM DANH MỤC</td>
  </tr>
  <tr>
    <td class="tieudenho" width="25%">TÊN DANH MỤC</td>
    <td width="75%"><input type="text" name="tenDanhMuc" size="20" value="<? echo $rs["tenDanhMuc"]?>"></td>
  </tr>
   <tr>
    <td class="tieudenho">Nhóm</td>
    <td><select name="idNhom">
        <? if ($rs["idNhom"] == "1"){ ?>
        <option value="1" selected="selected">sàn gỗ</option>
        <?  } else{?>
        <option value="1">sàn gỗ</option>
        <? }?>
        <? if ($rs["idNhom"] == "2"){ ?>
        <option value="2" selected="selected">sàn nhựa</option>
        <?  } else{?>
        <option value="2">sàn nhựa</option>
        <? }?>
        <? if ($rs["idNhom"] == "3"){ ?>
        <option value="3" selected="selected">xốp dán tường</option>
        <?  } else{?>
        <option value="3">xốp dán tường</option>
        <? }?>
        
       
    </select></td>
  </tr>
  <tr>
    <td class="tieudenho">THỨ TỰ</td>
    <td><input type="text" name="thuTu" size="5" value="<? echo $rs["thuTu"]?>"></td>
  </tr>
  <td class="tieudenho">TRẠNG THÁI</td>
    <td><select name="trangThai">
    <? if($rs["trangThai"]==1){?>
    <option value="1" selected="selected">Sử dụng</option>
    <option value="0">Không sử dụng</option>
    <? }else if($rs["trangThai"]==0){?>
    <option value="1">Sử dụng</option>
    <option value="0" selected="selected">Không sử dụng</option>
    <? }?>
      </select></td>
       <tr>
    <td class="tieudenho">Đặc điểm</td>
    <td>
    <textarea id="dacdiem" name="dacDiem" cols="60" rows="30"><? echo $rs["dacDiem"]; ?></textarea>
    </td>
  </tr>
    <tr>
  	<td align="center">&nbsp;</td>
    <td ><input type="submit" class="submit" name="sua" value="Sửa"> <input type="submit" class="submit" name="xoa" value="Xóa"></td> 
  </tr>
</table>
</form>
<script>
CKEDITOR.replace( 'dacdiem' );
</script>