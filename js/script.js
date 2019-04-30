//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterShow',initiator);
  });
	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
		$('.header').css('width',window.innerWidth  - scrollWidth);
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
    $('.header').css('width','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});

//отзывы
$('.reviews__slider').slick({
	slidesToShow: 3,
	prevArrow: '<span class="reviews__arrow slick-prev"></span>',
	nextArrow: '<span class="reviews__arrow slick-next"></span>'
})