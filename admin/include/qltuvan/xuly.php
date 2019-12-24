<? 
session_start();
include("../../config.php");
$tieuDe = $_POST["tieuDe"];
$anhMinhHoa = $_FILES["anhMinhHoa"]["name"];
$noiDung = $_POST["noiDung"];
$id = $_GET["id"];
$time = date("Ymdhis");
if($anhMinhHoa!=""){
	$anhMinhHoa=$time.$anhMinhHoa;
	$url="uploads/".$anhMinhHoa;
	}
if(isset($_POST["them"])){
	if($anhMinhHoa!=""){
		copy($_FILES["anhMinhHoa"]["tmp_name"],"../../../uploads/".$anhMinhHoa);}
	$sql = "insert into tuvan(tieuDe,anhMinhHoa,noiDung) value('$tieuDe','$url','$noiDung')";
	mysql_query($sql);
	header("location:../../index.php?quanly=qltuvan&act=them");
	}
else if($_POST["sua"]){
	if($anhMinhHoa!=""){
		$sql = "select anhMinhHoa from tuvan where idBaiViet = $id";
		$tb = mysql_query($sql);
		$rs = mysql_fetch_array($tb);
		if(file_exists("../../../".$rs["anhMinhHoa"])){
			unlink("../../../".$rs["anhMinhHoa"]);}
			copy($_FILES["anhMinhHoa"]["tmp_name"],"../../../uploads/".$anhMinhHoa);
	$sql = "update tuvan set tieuDe='$tieuDe',anhMinhHoa='$url',noiDung='$noiDung' where idBaiViet='$id'";
	} else{
			$sql = "update tuvan set tieuDe='$tieuDe',noiDung='$noiDung' where idBaiViet='$id'";
	}
	mysql_query($sql);
	header("location:../../index.php?quanly=qltuvan&act=sua&id=$id");
	}
	else if(isset($_POST["xoa"])){
	$sql = "delete from tuvan where idBaiviet = $id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qltuvan&act=them");
	}
?>