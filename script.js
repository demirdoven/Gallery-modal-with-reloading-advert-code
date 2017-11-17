(function($) {
		$(".prev, .next, .sol, .sag, .column, .content-body__detail img").on('click', function(event){
			$.getScript("http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js");
			$('.reklam').html('');
				var rek1 = vars.reklamkodu1;
				var rek2 = vars.reklamkodu2;
				var rek3 = vars.reklamkodu3;
				var reklamlar = [];
				if ( rek1 ){
					reklamlar.push(rek1); 
				}else {}
				if ( rek2 ){
					reklamlar.push(rek2); 
				}else {}
				if ( rek3 ){
					reklamlar.push(rek3); 
				}else {}
				var rastgele = reklamlar[Math.floor(Math.random() * reklamlar.length)];
				$('.reklam').html(rastgele);
				(adsbygoogle = window.adsbygoogle || []).push({});
		});	
		$(document).on('keyup', function(event) {
				if ( (event.keyCode == 37) || (event.keyCode == 39) ) {
					$.getScript("http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js");
					$('.reklam').html('');
				var rek1 = vars.reklamkodu1;
				var rek2 = vars.reklamkodu2;
				var rek3 = vars.reklamkodu3;
				var reklamlar = [];
				if ( rek1 ){
					reklamlar.push(rek1); 
				}else {}
				if ( rek2 ){
					reklamlar.push(rek2); 
				}else {}
				if ( rek3 ){
					reklamlar.push(rek3); 
				}else {}
				var rastgele = reklamlar[Math.floor(Math.random() * reklamlar.length)];
				$('.reklam').html(rastgele);
				(adsbygoogle = window.adsbygoogle || []).push({});
				};
		});
	$('.mobil_kapat').click(function(){
		closeModal();
	});					
})( jQuery );
