<? 
include("../../config.php");
$tenUser = $_POST["tenUser"];
$passWord = $_POST["passWord"];
$level = $_POST["level"];
$id = $_GET["id"];
if(isset($_POST["them"])){
	$sql = "insert into user(tenUser,passWord,level) value('$tenUser','$passWord','$level')";
	mysql_query($sql);
	header("location:../../index.php?quanly=qluser&act=them");
	}
else if($_POST["sua"]){
	$sql = "update user set tenUser='$tenUser',passWord='$passWord',level='$level' where idUser=$id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qluser&act=sua&id=$id");
	}
	else if(isset($_POST["xoa"])){
	$sql = "delete from user where idUser = $id";
	mysql_query($sql);
	header("location:../../index.php?quanly=qluserc&act=them");
	}
?>