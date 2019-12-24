<div class="container">
    <div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 menu">
            <ul>
                <li><a href="index.php?xem=trangchu">TRANG CHỦ</a></li>
                <li><a href="#">SÀN GỖ</a>
                    <ul>
                    <? 
                    $sql = "select * from danhmuc where idNhom='1' and trangThai='1' order by thuTu ASC";
                    $tb = mysql_query($sql);
                    while($rs = mysql_fetch_array($tb)){?>
                        <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></a></li>
                    <? }
                    ?>
                    </ul>
                </li>
                <li><a href="#">SÀN NHỰA</a>
                    <ul>
                    <? 
                    $sql = "select * from danhmuc where idNhom='2' and trangThai='1' order by thuTu ASC";
                    $tb = mysql_query($sql);
                    while($rs = mysql_fetch_array($tb)){?>
                        <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></a></li>
                    <? }
                    ?>
                    </ul>
                </li>
                <li><a href="#">XỐP DÁN TƯỜNG</a>
                    <ul>
                    <? 
                    $sql = "select * from danhmuc where idNhom='3' and trangThai='1' order by thuTu ASC";
                    $tb = mysql_query($sql);
                    while($rs = mysql_fetch_array($tb)){?>
                        <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></a></li>
                    <? }
                    ?>
                    </ul>
                </li>
                <li><a href="index.php?xem=tuvan">TƯ VẤN</a></li>
                <li><a href="index.php?xem=lienhe">LIÊN HỆ</a></li>
            </ul>
        </div>
    </div>
</div>

