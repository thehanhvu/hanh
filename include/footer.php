<div class="container-fluid">
	<div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 text-center lienhe">
            <ul>
                <li>LIÊN HỆ</li>
                <li>SHOWROOM YẾN NHI</li>
                <li><a id="diachi">Đường Dựng - Liên Phương - TP.Hưng Yên</a>̣</li>
                <li><a id="dtchinh">0975.493.998</a></li>
                <li><a id="dtkhac">0979.629.930 - 0799.205.666</a></li>
                <li><a id="mail">nhuonghoang92@gmail.com</a></li>
            </ul>
        </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4 text-center danhmuc">
            <ul>
                <li><a>DANH MỤC</a></li>
                <? 
                $sql = "select * from danhmuc where trangThai=1 order by thuTu ASC";
                $tb = mysql_query($sql);
                ?>
                <li>
                <? 
                while($rs = mysql_fetch_array($tb)){?>
                    <li><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></a></li>
                <? }
                ?>
                </li>
            </ul>
        </div> 
        <div class="col-sm-4 col-md-4 col-lg-4 text-center facebook"></div>
	</div>
</div>