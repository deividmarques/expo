
$(document).ready( function(){

	$('td:last-child, p:last-child, label:last, li:last-child, ul:last, div:last-child, article:last-child, section:last-child, dl:last-child, dt:last-child, dd:last-child, ol:last-child, strong:last-child').addClass('lastc');
	$('td:first-child, p:first-child, label:first-child, li:first-child, ul:first-child, div:first-child, article:first-child, section:first-child, dl:first-child, dt:first, dd:first, ol:first-child, strong:first-child').addClass('firstc');

	// PRELOADER DE IMAGENS
	var img = new Array();
	img[1] = 'style/images/balao.png';
	img[2] = 'style/images/bg-cursos-lf.jpg';
	img[3] = 'style/images/bg-combinado-lf.png';
	img[4] = 'style/images/bg-hight-lf.png';
	img[5] = 'style/images/bg-teen-lf.png';
	img[6] = 'style/images/balao.png';
	img[7] = 'style/images/balao.png';
	img[8] = 'style/images/balao.png';
	img[9] = 'style/images/balao.png';
	img[10] = 'style/images/balao.png';
	img[11] = 'style/images/bg-work-lf.png';
	img[12] = 'style/images/bg-profissional-lf.png';
	img[13] = 'style/images/bg-executivo-lf.png';
	img[14] = 'style/images/bg-3idade-lf.png';
	img[15] = 'style/images/bg-cursos.jpg ';
	img[16] = 'style/images/bg-combinado.jpg';
	img[17] = 'style/images/bg-hight.png';
	img[18] = 'style/images/bg-teen.png';
	img[19] = 'style/images/bg-work.png';
	img[20] = 'style/images/bg-profissional.png';
	img[21] = 'style/images/bg-executivo.png';
	img[22] = 'style/images/bg-3idade.png';
	

	for (var i in img) {
		var loading = new Image;    
		loading.src = img[i];
	}

	//placeholder crossbrowser
	$('.ipt[placeholder]').each(function(){
		var ph = $(this).attr('placeholder')
		$(this).val(ph).focus(function(){
				if($(this).val() == ph) $(this).val('')
		}).blur(function(){
				if(!$(this).val()) $(this).val(ph)
		})
	})
	
	
	$('.parallax').jparallax()
	
	$('.etapas ul li.firstc').append('<span class="bg">');
	$('.etapas ul li.lastc').append('<span class="bg">');
	
	//abre e fecha o box
	$('.listas ul li a').toggle(function(){
		$(this).addClass('active');
		var obj = $(this).attr('href');
		$(obj).fadeIn();
		$('html, body').animate({
			scrollTop: $(obj).offset().top
		}, 500);
		return false;
	},function(){
		var obj = $(this).attr('href');
		$(this).removeClass('active');
		$(obj).fadeOut();
		return false;
	});
	
	//ancora orçamento
	$('.lk-orcar').click(function(){
		$('html, body').animate({
			scrollTop: $(".box-orcar").offset().top
		}, 500);
		$('.box-orcar ul li.firstc .ipt').focus();
	});
	
	//add class icones LI
	$('.listas ul li:nth-child(1)').addClass('one');
	$('.listas ul li:nth-child(2)').addClass('two');
	$('.listas ul li:nth-child(3)').addClass('three');
	$('.listas ul li:nth-child(4)').addClass('four');
	$('.listas ul li:nth-child(5)').addClass('five');
	$('.listas ul li:nth-child(6)').addClass('six');
	$('.listas ul li:nth-child(7)').addClass('seven');
	$('.listas ul li:nth-child(8)').addClass('eight');
	
	
	
	//abas dos boxes iniciais
	$('.list a').click(function(e){
		e.preventDefault();
		var obj = $(this).attr('href');
		//$(this).parents('.list:eq(0)').siblings('.box').hide().end().hide();
		$(this).parents('.box-entries').find('.list').hide();
		$(this).parents('.box-entries').find('.box').hide();
		$(this).parents('.box-entries').find('.box-combo div:first').show();
		$(this).parents('.box-entries').find('#'+ obj).show();
	});
	
	//Abas do box interno
	$('.list-inside a').click(function(e){
		e.preventDefault();
		var obj = $(this).attr('href');
		//$('.list-inside a').removeClass('active')
		$(this).parents('.list-inside').find('a').removeClass('active')
		$(this).addClass('active');
		//$('.box-combo > div').fadeOut();
		$(this).parents('.list-inside').siblings('.box-combo').find('.box-inside').hide();
		$(this).parents('.box-entries').find(obj).show();
	});
				
	// retorno ao box inicial
	$('.lk-return').click(function(){
		$(this).parents('.box-entries').find('.combo-box').hide();
		$(this).parents('.box-entries').children('.box-init').show().siblings('.list').show();
	});
							
	//validar.init();
	
	/** Validar Form **/

	//$('form').submit(function(){
	//	return validar.form($(this))
	//});
	
	
	
	//A ideia é: quando seleciona uma opção no primeiro select, ela trava o do segundo.

//Atualmente está funcionando, porém, preciso fazer pro id pois podem haver registros iguais.

//Obrigado pela ajuda pessoal!!!


	
});