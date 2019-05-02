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
	infinite: false,
	prevArrow: '<span class="reviews__arrow slick-prev"></span>',
	nextArrow: '<span class="reviews__arrow slick-next"></span>',
	dotsClass: 'reviews__dots slick-dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false,
				dots: true
			}
		}
	]
})
//Загрузка файлов
$('.file-btn input').change(function(){
	if(this.value){		
		$(this).siblings('span').text(this.files[0].name)
	}else{
		$(this).siblings('span').text('Прикрепить файл')
	}
})
//Карта
ymaps.ready(function(){
	$('[id^="map"]').each(initMap);
});
function initMap(){	
	var address = $(this).data('address') || 'Караганда',
			mapId = this.id;
			
	ymaps.geocode(address, {
			results: 1
	}).then(function (res) {
			// Выбираем первый результат геокодирования.
			var firstGeoObject = res.geoObjects.get(0),
					// Координаты геообъекта.
					coords = firstGeoObject.geometry.getCoordinates(),
					// Область видимости геообъекта.
					bounds = firstGeoObject.properties.get('boundedBy');
					
					firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
					// Получаем строку с адресом и выводим в иконке геообъекта.
					firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());
			var myMap = new ymaps.Map(mapId, {
				center: coords,
				zoom: 14,
				controls: ['zoomControl']
			});
							
			myPlacemark = new ymaps.Placemark(coords, 
				{
					hintContent: '',
					balloonContent: ''
				});
				myMap.geoObjects.add(myPlacemark);
	});		
	//myMap.behaviors.disable('scrollZoom')
}