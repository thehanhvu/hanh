
<? 
	$sql = "select url from anhbanner order by thuTu ASC";
	$tb = mysql_query($sql);
?>
<div class="container">
	<div class="row">
    	<div class="col-sm-12 col-md-12 col-lg-12 no-padding" id="sliderWraper">
        	<div class="slide">
				<?  while ($rs = mysql_fetch_array($tb)){?>
                       <img src="<? echo $rs["url"];?>" />
                <? } ?>     
			</div>
			<div class="nuttrai nut" onClick="previous();">&lt;</div>
    		<div class="nutphai nut" onClick="next();">&gt;</div>
    	</div>
	</div>
    
</div>

<script language="javascript">
	var sliderWraper = document.getElementById('sliderWraper');
	var slide = document.getElementsByClassName('slide')[0];
	var img = document.querySelectorAll('.slide img');
	var nut = document.getElementsByClassName('nut');
	var dich, width, W;
	window.addEventListener('resize',setup);
	function setup(){
		dich =0;
		width = sliderWraper.offsetWidth;
		W = width*img.length;
		var height = width/2;
		sliderWraper.style.height = height +'px';
		if(!slide.style.position) slide.style.positon = 'absolute';
		if(!slide.style.left) slide.style.left = 0;
		for(let i=0;i<img.length;i++){
			img[i].style.width = width + 'px';
			img[i].style.height = height + 'px';
		}
		slide.style.width = W + 'px';
		for (let i = 0; i< nut.length; i++){
			nut[i].style.top = (height/2-10) + 'px';
		}
	}
	setup();
	slide.auto = setInterval('next()',4000);
	function next(){
		if(slide.auto) clearInterval(slide.auto);
		dich -= width;
		if(dich<width-W){dich =0;}
		play();
		slide.auto = setInterval('next()',4000);
	}
	function previous(){
		if(slide.auto) clearInterval(slide.auto);
		dich+=width;
		if(dich>0){dich=width-W;}
		play();
		slide.auto = setInterval('next()',4000);
	}
	function play(){
		var slide1 = document.getElementsByClassName('slide')[0];
		var x = parseInt(slide1.style.left);
		var dif = Math.ceil(Math.abs((dich-x)/8));
		if(dich>x){x+=dif;}
		if(dich<x){x-=dif;}
		if(dich==x)return;
		slide1.style.left = x+"px";
		slide1.move = setTimeout('play()',40);
	}
	
</script>