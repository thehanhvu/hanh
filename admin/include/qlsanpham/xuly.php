<? 
session_start();
include("../../config.php");
$tenSanPham = $_POST["tenSanPham"];
$idDanhMuc = $_POST["danhMuc"];
$xuatXu = $_POST["xuatXu"];
$dacDiem = $_POST["dacDiem"];
$nguon = $_POST["nguon"];
$giaGoc = $_POST["giaGoc"];
$giaKhuyenMai = $_POST["giaKhuyenMai"];
$spNoiBat = $_POST["spNoiBat"];
$hinhAnh = $_FILES["hinhAnh"]["name"];
$time = date("Ymdhis");
if($hinhAnh!=""){
	$hinhAnh=$time.$hinhAnh;
	$url="uploads/".$hinhAnh;
	}
$nguoiNhap = $_SESSION["user_qlsg_name"];
$ngayNhap = date("Y-m-d");
$id = $_GET["id"];
if(isset($_POST["them"])){
	if($hinhAnh!=""){
		copy($_FILES["hinhAnh"]["tmp_name"],"../../../uploads/".$hinhAnh);
		}
	$sql = "insert into sanpham(tenSanPham,idDanhMuc,xuatXu,dacDiem,nguon,giaGoc,giaKhuyenMai,spNoiBat,hinhAnh,nguoiNhap,ngayNhap) values('$tenSanPham','$idDanhMuc','$xuatXu','$dacDiem','$nguon','$giaGoc','$giaKhuyenMai','$spNoiBat','$url','$nguoiNhap','$ngayNhap')";
	mysql_query($sql);
	header("location:../../index.php?quanly=qlsanpham&act=them");
	}
else if($_POST["sua"]){
	if($hinhAnh!=""){
		$sql = "select hinhAnh from sanpham where idSanPham = $id";
		$tb = mysql_query($sql);
		$rs = mysql_fetch_array($tb);
		if(file_exists("../../../".$rs["hinhAnh"])){
			unlink("../../../".$rs["hinhAnh"]);}
			copy($_FILES["hinhAnh"]["tmp_name"],"../../../uploads/".$hinhAnh);
			$sql = "update sanpham set tenSanPham='$tenSanPham',idDanhMuc='$idDanhMuc',xuatXu='$xuatXu',dacDiem='$dacDiem', nguon='$nguon', giaGoc='$giaGoc', giaKhuyenMai='$giaKhuyenMai', spNoiBat='$spNoiBat', hinhAnh='$url', nguoiNhap='$nguoiNhap', ngayNhap='$ngayNhap' where idSanPham=$id";
		} else{
			$sql = "update sanpham set tenSanPham='$tenSanPham',idDanhMuc='$idDanhMuc',xuatXu='$xuatXu',dacDiem='$dacDiem', nguon='$nguon', giaGoc='$giaGoc', giaKhuyenMai='$giaKhuyenMai', spNoiBat='$spNoiBat', nguoiNhap='$nguoiNhap', ngayNhap='$ngayNhap' where idSanPham=$id";
	}
	mysql_query($sql);
	header("location:../../index.php?quanly=qlsanpham&act=sua&id=$id");
	}
	else if(isset($_POST["xoa"])){
	$sql = "delete from sanpham where idsanpham = $id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qlsanpham&act=them");
	}
?>