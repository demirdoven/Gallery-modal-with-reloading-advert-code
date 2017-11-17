	
<style>
.image__zoom {
  box-sizing: border-box;
  background-size: cover;
  background-position: 50% 50%;
  cursor: zoom-in;
}
.image__zoom:hover {
  background-size: 200%;
}
.image__zoom img {
	height:100%;
}
@media screen and (max-width:480px) {
.image-containerresim {
	box-shadow: 0 1px 8px rgba(0, 0, 0, 0.6), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.image__zoom {
	background-image:none!important;
}
.mySlides {
	width: 100%!important;
    height: auto!important;
    max-width: 100%!important;
    position: relative!important;
    top: 0!important;
    left: 0!important;
    box-sizing: border-box!important;
    overflow: hidden!important;
    transform: none!important;
    background: #fff;
}
.mySlides img {
	max-width: 100%!important;	width: auto!important;
    height: 300px!important;
	position: relative!important;
    top: 0!important;
    left: 50%!important;
    transform: translateX(-50%);
    padding-top: 10px;
    padding-bottom: 10px;
	opacity: 1!important;
}
#myModal .bottom-row .left-column {
	position: relative!important;
    width: 100%!important;
	max-width: 100%!important;
}
#myModal .bottom-row .right-column {
	width: 100%!important;
}
#myModal {
	overflow: auto!important;
}
.prev, .next, .top-row, .image-details, .pagerwrap {
	display: none!important;
}
.advert {
	display: block!important;
    position: relative!important;
    top: 415px!important;
    left: 50%;
    transform: translateX(-50%);
    padding-left: 0!important;
}
#myModal .bottom-row .right-column {
border: none!important;
}
.sagsol {
	width: 100%;
    position: absolute;
    top: 325px;
display: block!important;
}		
.sol {
	width: 40%;
    float: left;
    margin-left: 7%;
    display: block!important;
    background: none repeat scroll 0 0 #5e7184;
    color: rgba(255, 255, 255, 0.78);
    font: bold 35px Arial;
    padding: 6px 3px 5px 3px;
    position: relative;
    text-align: center;
    text-decoration: none;
border-radius: 5px;
}
.sag {
	width: 40%;
    float: right;
    margin-right: 7%;
    display: block!important;
    background: none repeat scroll 0 0 rgb(94, 113, 132);
    color: rgba(255, 255, 255, 0.78);
    font: bold 35px Arial;
    padding: 6px 3px 5px 3px;
    position: relative;
    text-align: center;
    text-decoration: none;
border-radius: 5px;
}
.mobil_kapat {
	display: block!important;
    position: absolute;
    top: 15px;
    left: 15px;
    width: 30px;
    height: 30px;
    background: #333333;
    border-radius: 50%;
    z-index: 9999;
}
.mobil_kapat span:first-child {
	display: block!important;
	width: 20px;
    height: 3px;
    background: #fff;
    transform: rotate(45deg);
    position: absolute;
    top: 13px;
    left: 5px;
}
.mobil_kapat span:last-child {
	display: block!important;
	width: 20px;
    height: 3px;
    background: #fff;
    transform: rotate(135deg);
    position: absolute;
    top: 13px;
    left: 5px;
}
}
.sagsol, .sag, .sol, .mobil_kapat, .mobil_kapat span  {
	display: none;
}
.column {
	display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    position: relative;
    padding-left: 1em;
    overflow: hidden;
    max-height: 310px;
}
.modal {
	display: none;
	flex-direction: column;
    position: fixed;
    top: 0;
    z-index: 5000;
    min-width: 100%;
    min-height: 100%;
    font-family: Google-Oswald;
    font-weight: 400;
	background-color: <?php echo get_option('hl_arkaplan_rengi'); ?>;
}
.image_container{
	-ms-flex: 1 1;
    flex: 1 1;
    overflow: hidden;
    position: relative;
}
.close {
 opacity: 1!important;
 color: #fff!important;
}
.mySlides {
  display: none;
  overflow:hidden;
	max-width:70%;
	position: absolute;
	top:45%;
	left:50%;
	transform:translate(-50%,-50%);
box-sizing: border-box;
overflow: hidden;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 45%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  transform: translate(-50%,-50%);
}
.prev {
  left: 7.5%;
  border-radius: 3px 0 0 3px;
}
.next {
  right: 2.5%;
  border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
  background-color: #4E4D4D;
  border-radius:4px;
}
.aktiff, .demo:hover {
	outline: 3px solid #BB1214;
	outline-offset: -3px;
}
.pagerwrap {
	width: 340px;
    max-height: 340px;
    position: absolute;
    bottom: 3em;
}
.advert {
    padding-left: 1em;
	position: absolute;
	top:1em;
}
#reklamkodumuz {
	width: 26%;
    float: right;
    position: relative;
	margin-top: 50px;
}
ins {
	background-color: transparent!important;
}
.zooom {
	transform: scale(2);
}
.mySlides img {
	width:100%;
	opacity: 0;
}
.column .demo {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    display: inline-block;
    width: 100px;
    height: 100px;
    margin: 0 4px 4px 0;
    background-size: cover;
    background-position: 50%;
    cursor: pointer;
}
 .hl_baslik {
	color: <?php echo get_option('hl_baslik_font_rengi'); ?>;
	font-weight:bold;
	font-family: <?php echo get_option('hl_baslik_fontu'); ?>;
	font-size: <?php echo get_option('hl_baslik_fontu_boyutu'); ?>em;
    white-space: nowrap;
}
.modal .top-row {
	position: relative;
    height: 4.8em;
    border-bottom: 1px solid #7c7c7c;
	width: 100%;
}
.modal .top-row .header {
	width: calc(100% - 340px);
    height: 100%;
    position: relative;
    font-size: 2em;
    line-height: 2.5em;
    padding-left: .5em;
    text-overflow: ellipsis;
    overflow: hidden;
    color: #fff;
padding-top: 0!important;
    padding-bottom: 0!important;
}
.buttons {
	display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-pack: end;
    justify-content: flex-end;
    position: absolute;
    top: 0;
    right: 0;
    width: 340px;
    height: 100%;
    border-left: 1px solid #7c7c7c;
}
.gbutton {
	display: inline-block;
    cursor: pointer;
    width: 85px;
    line-height: 2.5em;
    height: 100%;
    font-size: 2em;
    color: #fff;
    text-align: center;
    border-left: 1px solid #7c7c7c;
	position: relative;
}
.icon-set {
	width:20px;
	height:20px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
}
#myModal .bottom-row {
	-ms-flex: 1 1;
    flex: 1 1;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}
#myModal .bottom-row .left-column {
	position: relative;
    -ms-flex: 1 1;
    flex: 1 1;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-direction: column;
    flex-direction: column;
    max-width: calc(100% - 340px);
}
#myModal .bottom-row .right-column {
	display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    position: absolute;
    top: 0;
    right: 0;
    width: 340px;
    height: 100%;
	border-left: 1px solid #7c7c7c;
}
.bottom-row .left-column .image-details {
	bottom: 0;
    width: 100%;
	font-family: <?php echo get_option('hl_alt_kisim_fontu'); ?>;
    font-size: <?php echo get_option('hl_alt_kisim_fontu_boyutu'); ?>em;
    color: <?php echo get_option('hl_alt_kisim_rengi'); ?>;
	height: 3.5em;
    line-height: 3.5em;
    padding-left: 1em;
	position:absolute;
    font-weight: 300;
    border-top: 1px solid #7c7c7c;
}
#caption {
    position: absolute;
    left: 0;
	padding-left:20px;
}
#numarasi {
	position: absolute;
    right: 0;
    width: 5em;
    text-align: center;
    border-left: 1px solid #7c7c7c;
}
#paylasbutonlari {
	width:100%;
	height:100%;
	background-color: green;
}
#paylasbutonlari a {
	color: #fff;
    display: block;
    width: 83px;
    height: 33px;
    line-height: 38px;
	text-align: center;
	font-size:20px;font-family: Arial;
}
#paylasbutonlari .facebook {
	background-color: #4e6ba8;
}
#paylasbutonlari .twitter {
	background-color: #2da2de;
}
.top-row .header .logo {
	    display: inline-block;
    position: absolute;
    right: 0;
    width: 160px;
    line-height: 2.65em;
}
.kapali {
	visibility: hidden;
}
</style>
<script type="text/javascript">
function openModal() {
	  $('#myModal').css('display','flex');
	}
	function closeModal() {
	  document.getElementById('myModal').style.display = "none";
	}
	var slideIndex = 1;
	showSlides(slideIndex);
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}
	function removeClassName(elem, name){
    var remClass = elem.className;
    var re = new RegExp('(^| )' + name + '( |$)');
    remClass = remClass.replace(re, '$1');
    remClass = remClass.replace(/ $/, '');
    elem.className = remClass;
	}
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}
	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";
		  slides[i].className = slides[i].className.replace(" suanki", "");
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" aktiff", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  slides[slideIndex-1].className += " suanki";
	  dots[slideIndex-1].className += " aktiff";
	  document.getElementById('caption').innerHTML = dots[slideIndex-1].title;
	  document.getElementById('numarasi').innerHTML = [slideIndex] + '/' + slides.length;
	 }
</script>
<div id="myModal" class="modal">
	<div class="top-row">
		<div class="header">
			<span class="hl_baslik"><?php the_title(); ?></span>
			<div class="logo">
				<a href="<?php $url = home_url(); echo esc_url( $url ); ?>"><img src="https://cepkolik.com/wp-content/uploads/logo_white.png" style="vertical-align: middle;"/></a>
			</div>
		</div>
		<div class="buttons">
			<span class="buyut cursor gbutton" id="buyut" style="transform:rotate(90deg);"><img src="https://www.cepkolik.com/wp-content/uploads/buyutec.png" class="icon-set"/></span>
			<span class="linkver cursor gbutton" id="linkver"><img src="https://www.cepkolik.com/wp-content/uploads/fullpic.png" class="icon-set"/></span>
			<span class="paylas cursor gbutton" id="paylass">
				<div id="paylasbutonlari" class="kapali">
					<a href="#" class="facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog','width=626,height=436'); return false;"><img src="https://www.cepkolik.com/wp-content/uploads/facebook_icon.png" style="height:25px;width:auto;margin-top:-2px;"/></a>
					<a class="twitter customer share" href="" title="Twitter share" target="_blank"><img src="https://www.cepkolik.com/wp-content/uploads/skype_icon.png" style="height:25px;width:auto;margin-top:-3px;"/></a>
				</div>
				<img src="https://www.cepkolik.com/wp-content/uploads/paylas_icon.png" id="paylas_icon" class="icon-set"/>
			</span>
			<span class="close cursor gbutton" id="kapat"><img src="https://www.cepkolik.com/wp-content/uploads/kapat_icon.png" class="icon-set"/></span>
		</div>
	</div>
    <div class="bottom-row">
		<div class="left-column">
			<div class="mobil_kapat">
				<span></span>
				<span></span>
			</div>
			<div class="image-containerresim">
			  <div class="image-content">
				<i id="ayir"></i>
				<a class="prev" onclick="plusSlides(-1)"><img src="https://www.cepkolik.com/wp-content/uploads/sol_ok.png" style="width:30px;"/></a>
				<a class="next" onclick="plusSlides(1)"><img src="https://www.cepkolik.com/wp-content/uploads/sol_ok.png" style="width:30px;transform:rotate(180deg);"/></a>
			  </div>
			</div>
			<div class="image-details">
				<span id="caption"></span>
				<span id="numarasi"></span>
			</div>
		</div>
		<div class="right-column">
			<div class="sagsol">
				<div class="sol">GERİ</div>
				<div class="sag">İLERİ</div>
			</div>
			<div class="advert">
				<div class="reklam">
					<?php  
						$birinciReklam = get_option('ads_1');
						$ikinciReklam = get_option('ads_2');
						$ucuncuReklam = get_option('ads_3');
						$reklamDizi = array();
						if ( get_option('ads_1') ){ array_push($reklamDizi,$birinciReklam); }
						if ( get_option('ads_2') ){ array_push($reklamDizi,$ikinciReklam); }
						if ( get_option('ads_3') ){ array_push($reklamDizi,$ucuncuReklam); }
						$randIndex = array_rand($reklamDizi);
						echo $reklamDizi[$randIndex];
					?>
				</div>
			</div>
			<div class="pagerwrap">
				<span id="yukari" style="position:absolute;left:48.7%;top:-35px;z-index:999;">
					<i style="width:0;border-bottom:9px solid #fff;border-right:5px solid transparent;border-left:5px solid transparent;"></i>
				</span>
				<div class="column"></div><span id="asagi"></span>
				<span id="asagi" style="position:absolute;left:48.7%;bottom:-35px;z-index:999;">
					<i style="width:0;border-top:9px solid #fff;border-right:5px solid transparent;border-left:5px solid transparent;"></i>
				</span>
			</div>
		</div>
    </div>
</div>
