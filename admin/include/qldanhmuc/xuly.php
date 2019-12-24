<? 
include("../../config.php");
$tenDanhMuc = $_POST["tenDanhMuc"];
$thuTu = $_POST["thuTu"];
$trangThai = $_POST["trangThai"];
$dacDiem = $_POST["dacDiem"];
$idNhom = $_POST["idNhom"];
$id = $_GET["id"];
if(isset($_POST["them"])){
	$sql = "insert into danhmuc(tenDanhMuc,idNhom,thuTu,trangThai,dacDiem) value('$tenDanhMuc','$idNhom','$thuTu','$trangThai','$dacDiem')";
	mysql_query($sql);
	header("location:../../index.php?quanly=qldanhmuc&act=them");
	}
else if($_POST["sua"]){
	$sql = "update danhmuc set tenDanhMuc='$tenDanhMuc',idNhom='$idNhom',thuTu='$thuTu',trangThai='$trangThai',dacDiem='$dacDiem' where idDanhMuc=$id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qldanhmuc&act=sua&id=$id");
	}
	else if(isset($_POST["xoa"])){
	$sql = "delete from danhmuc where idDanhMuc = $id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qldanhmuc&act=them");
	}
?>