<? include("config.php");
session_start();
if($_SESSION["user_qlsg_id"]==""){header("location: login.php");};
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<title>Untitled Document</title>
</head>

<body>
	<div class="khung">
		<? include("include/banner.php");?>
		<? include("include/menu.php");?>
		<? include("include/main.php");?>
    	<? include("include/footer.php");?>
     </div>
</body>
</html>