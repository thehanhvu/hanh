<div class="menu-container">
<div class="container">
    <div class="row a">
    	<div class="col-sm-12 col-md-12 col-lg-12 menu">
            <div class="icon">
                <i class="glyphicon glyphicon-align-justify"></i>
                <i class="glyphicon glyphicon-th-list"></i>
            </div>
            <ul>
                <li><a href="index.php?xem=trangchu"><i class="glyphicon glyphicon-home"></i> TRANG CHỦ</a></li>
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
</div>
<script>
    document.addEventListener('scroll',function(){
        if(document.body.scrollTop>300 || document.documentElement.scrollTop>300){
            document.getElementsByClassName('menu-container')[0].className = 'menu-container menu-noi';
        } else{
            document.getElementsByClassName('menu-container')[0].className = 'menu-container';
        }
    })
    document.getElementsByClassName('icon')[0].addEventListener('click',function(){
        document.getElementsByClassName('menu')[0].classList.toggle('menu-height');
    });
</script>

