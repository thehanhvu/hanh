<? 
ob_start();
include("config.php");
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập Phần mềm quản lý tài sản nhà nước trong Công an tỉnh</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/stylelogin.css">

  </head>
  <body>
<div class="login-form w3_form">

      <div class="login-title w3_title">
           <h1>PHẦN MỀM QUẢN LÝ WEBSITE SÀN GỖ <BR></h1>
      </div>
           <div class="login w3_login">
                <h2 class="login-header w3_header">ĐĂNG NHẬP</h2>
				    <div class="w3l_grid">
                        <form class="login-container" action="login.php" method="post">
                             <input type="text" placeholder="User name" Name="user" required >
                             <input type="password" placeholder="Password" Name="password" required>
                             <input type="submit" value="Submit" name="submit">
                        </form>
                        <div class="thongbao" id="thongbao"></div>
                  </div>
       </div>
       
</div>

<div class="footer-w3l">
		<p class="agile"> &copy; 2018 Elegant Login Form . All Rights Reserved | Design by PV01 HY</p>
</div>
<?

if(isset($_POST["submit"])){
$user=$_POST["user"];
$password=$_POST["password"];
$sql = "select * from user where (tenUser = '$user') and (passWord = '$password')";
$tb = mysql_query($sql);
$num = mysql_num_rows($tb);
if($num == 0){?>
	<script>
   document.getElementById("thongbao").textContent = "Đăng nhập không thành công !";
    </script>
	<? }
else{
	$rs = mysql_fetch_array($tb);
$_SESSION["user_qlsg_id"] = $rs["idUser"];
$_SESSION["user_qlsg_name"] = $rs["tenUser"];
$_SESSION["user_qlsg_level"] = $rs["level"];
header("location: index.php");
}}
ob_end_flush();
?>
</body>
</html>