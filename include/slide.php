
<? 
	$sql = "select url from anhbanner order by thuTu ASC";
	$tb = mysql_query($sql);
?>
<div class="container no-padding">
	<div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12">
        	<div class="slide">
           
				<?  while ($rs = mysql_fetch_array($tb)){?>
                       <img src="<? echo $rs["url"];?>" />
                <? } ?>     
            </div>
    	</div>
	</div>
    <div class="nuttrai" onClick="previous();">&lt;</div>
    <div class="nutphai" onClick="next();">&gt;</div>
</div>

<script language="javascript" async>
/*
	var img = document.querySelectorAll('.slide img');
				for(var i =0;i<img.length; i++){
					img[i].style.width=1000+"px";
					img[i].style.height=500+"px";	
				}
	var W = img.length * 1000;
	var slide = document.getElementsByClassName('slide')[0];
	if(!slide.style.position) slide.style.position ="absolute";
	if(!slide.style.left) slide.style.left =0+"px" //Nếu chưa có cái này sẽ không tính được 'x' => lỗi chương trình;
	slide.style.width = W +"px";
	var dich =0;
	slide.auto = setInterval('next()',4000);
	function next(){
		if(slide.auto) clearInterval(slide.auto);
		dich -= 1000;
		if(dich<1000-W){dich =0;}
		play();
		slide.auto = setInterval('next()',4000);
	}
	function previous(){
		if(slide.auto) clearInterval(slide.auto);
		dich+=1000;
		if(dich>0){dich=1000-W;}
		play();
		slide.auto = setInterval('next()',4000);
	}
	function play(){
		var slide1 = document.getElementsByClassName('slide')[0];
		var x = parseInt(slide1.style.left);
		var dif = Math.ceil(Math.abs((dich-x)/10));
		if(dich>x){x+=dif;}
		if(dich<x){x-=dif;}
		if(dich==x)return;
		slide1.style.left = x+"px";
		slide1.move = setTimeout('play()',40);
	}
	*/
</script>