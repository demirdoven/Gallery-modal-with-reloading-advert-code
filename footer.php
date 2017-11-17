<?php 
if ( is_singular( array( 'phone', 'tablet', 'notebook' ) ) ) {
?>	
			<script type="text/javascript">
				(function($) {
				$('.gallery-img').removeAttr('href');
				$('.gallery-img').each(function(i){
					var sc = $(this).find('img');
					var src = sc.attr('src');
					$(this).attr('data-hera',src)
				});
				$('.gallery-img').css('cursor','pointer');
				$('.gallery-img:eq(0)').click(function(){
					$('.modal').css('display','flex');
					$('.td-header-wrap').css('z-index','10');
					currentSlide(1);
				});
				$('.hide .gallery-img').each(function(i) { 
											var urlmiz = $(this).attr('data-hera');
											var alt_tag = $(this).find('img').attr('alt');
											var kod = '<div class="mySlides image__zoom" style="background-image:url('+ urlmiz +')"><img alt="'+ alt_tag +'" src="'+ urlmiz +'"/></div>';
											$('#ayir').after(kod);
				});
				$('#kapat').click(function(){
					$('.modal').css('display','none');
					$('.td-header-wrap').css('z-index','2000');
				});
				$(document).on('keyup',function(evt) {
					if (evt.keyCode == 27) {
							$('.modal').css('display','none');
							$('.td-header-wrap').css('z-index','2000');
							$('.td-container').css('width','1068px');
					}
				});
				$('.logo img').hover(function(){
											$(this).attr('src','https://cepkolik.com/wp-content/uploads/2017/logo-new.png');
										});
				$('.logo img').mouseout(function(){
											$(this).attr('src','https://cepkolik.com/wp-content/uploads/logo_white.png');
				});
				$('.mySlides img').each(function(i){
												var src = $(this).attr('src');
												var alt = $(this).attr('alt');
												var pager = '<div class="demo cursor" style="background-image:url('+ src +');" onclick="currentSlide('+ (i+1) +')" title="'+ alt +'" ></div>'
												$('.column').append(pager);
				});
				var alt = $('.suanki').find('img').attr('alt');
				$('#caption').html(alt);
				$('#linkver').on('click', function(){
					var adres = $('.suanki').find('img').attr('src');
					window.open(adres,'_blank');
				});
				$('#paylass').click(function(){
												$('#paylasbutonlari').removeClass('kapali');
												$('#paylas_icon').addClass('kapali');
				});
											$('.prev, .next, .hera_column').click(function(){
												$('#paylasbutonlari').addClass('kapali');
												$('#paylas_icon').removeClass('kapali');
				});
				$('.sag').click(function(){
					plusSlides(1);	
				});
				$('.sol').click(function(){
					plusSlides(-1);	
				});
				$.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
					// Prevent default anchor event
					e.preventDefault();
					// Set values for window
					intWidth = intWidth || '500';
					intHeight = intHeight || '400';
					strResize = (blnResize ? 'yes' : 'no');
					// Set title and open popup with focus on it
					var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
						strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
						objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
				}
				$('.customer.share').on("click", function(e) {
					  $(this).customerPopup(e);
					});
					$('.twitter').attr('href','https://twitter.com/share?url='+encodeURIComponent(location.href));
				$((document)=>{
					var selector = $(".image__zoom");
					selector.hover(function(){
						selector.on("mousemove", function( event ){
							var parentOffset = $(this).offset();
							var posX = (event.pageX - parentOffset.left) / $(this).width() * 100;
							var posY = (event.pageY - parentOffset.top) / $(this).height() * 100;
							$(this).css("background-position", posX+"% "+posY+"%");
						})
					})
					selector.mouseleave(function(){
							$(this).css("background-position", "50% 50%");
					})
				});
				$(".image__zoom").toggle(
				  function() {
					$(this).find('img').css('opacity','0');
					$(this).css('cursor','zoom-out');
				  }, function() {
					$(this).find('img').css('opacity','1');
					$(this).css('cursor','zoom-in');
				  }
				);
				$( "#buyut" ).toggle(
				  function() {
					$(".image__zoom").find('img').css('opacity','0');
					$(".image__zoom").css('cursor','zoom-out');
					$(".image__zoom").css('background-size','200%');
				  }, function() {
					$(".image__zoom").find('img').css('opacity','1');
					$(".image__zoom").css('cursor','zoom-in');
				  }
				);
				$('.next, .prev, .demo-cursor, .close, .paylas, .linkver').click(function(){
					$(".image__zoom").find('img').css('opacity','1');
					$(".image__zoom").css('cursor','zoom-in');
				});
				// get the number of .child elements
						var totalitems = $(".column .demo").length;
						// get the height of .child
						var scrollval = $('.demo').height();
						// work out the total height.
						var totalheight = (totalitems*scrollval)-($(".column").height());
						$(document).on("click", "#asagi",function(){
							var currentscrollval = $('.column').scrollTop();
							$('.column').scrollTop(scrollval+currentscrollval);
							// hide/show buttons
							if(currentscrollval == totalheight) {
								$(this).hide();         
							 }
							 else {
								 $("#yukari").show();
							 }
						});
						 $(document).on("click", "#yukari",function(){
							 var currentscrollval = parseInt($('.column').scrollTop());
							$('.column').scrollTop(currentscrollval-scrollval);
							 // hide/show buttons
							 if((scrollval+currentscrollval) == scrollval) {
								$(this).hide();         
							 }
							 else {
								 $("#asagi").show();
							 }
				});
				$(document).on('keyup', function(event) {
					if (event.keyCode == 37) { plusSlides(-1) };
				});
				$(document).on('keyup', function(event) {
					if (event.keyCode == 39) { plusSlides(1) };
				});
				})( jQuery );
				</script>
<?php
}
?>
