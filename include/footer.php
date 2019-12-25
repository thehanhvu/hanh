<div class="container-fluid">
	<div class="row footer">
        <div class="col-sm-4 col-md-4 col-lg-4 lienhe">

                <h4>LIÊN HỆ</h4>
                <h4>SHOWROOM YẾN NHI</h4>
                <p><i class="glyphicon glyphicon-map-marker"></i> Đường Dựng - Liên Phương - TP.Hưng Yên</p>
                <p><i class="glyphicon glyphicon-phone"></i> 0975.493.998</p>
                <p><i class="glyphicon glyphicon-phone-alt"></i> 0979.629.930 - 0799.205.666</p>
                <p><i class="glyphicon glyphicon-envelope"></i> nhuonghoang92@gmail.com</p>

        </div>
        
        <div class="col-sm-4 col-md-4 col-lg-4 text-center danhmuc">
           
                <h4>DANH MỤC</h4>
                <? 
                $sql = "select * from danhmuc where trangThai=1 order by thuTu ASC";
                $tb = mysql_query($sql);
                ?>
                
                <? 
                while($rs = mysql_fetch_array($tb)){?>
                    <p><a href="index.php?xem=danhmuc&iddanhmuc=<? echo $rs["idDanhMuc"];?>"><? echo $rs["tenDanhMuc"];?></a></p>
                <? }
                ?>

        </div> 
        <div class="col-sm-4 col-md-4 col-lg-4 text-center facebook"></div>
	</div>
</div>