<?
	$city = $cities[$current_city];
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Магистр | <?=$current_city;?></title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="libs/wow/animate.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="wrapper header__wrapper">
			<span class="logo header__logo"><img src="img/logo.png" alt=""></span>
			<div class="header__item">
				<h3 class="header__title">Интернет отдел:</h3>
				<div class="header__contact">
					<a href="tel:88005055601" class="header__phone">8 800 505 56 01</a>
					<div>Звонок по России бесплатный</div>
				</div>
				<div class="header__contact">
					<a href="https://wa.me/79274900004" target="_blank" class="header__phone">+ 7 927 490 00 04</a>
					<div>Whats App, Viber</div>
				</div>
			</div>
			<div class="header__item">
				<h3 class="header__title">Офис продаж:</h3>
				<div class="header__contact">
					<?
						$phone = $city['offices'][0]['phone'];
						$address = $city['offices'][0]['address'];
					?>
					<a href="tel:+<?=preg_replace('|\D|','',$phone)?>" class="header__phone"><?=$phone ?></a>
					<div><?=$address?></div>
				</div>
			</div>
			<a href="#" data-modal="location" class="header__location"><?=$current_city;?></a>			
			<a href="#" class="btn btn_white btn_small btn_login header__btn"><span>Вход</span></a>
		</div>
	</header>
	<!-- Переход на страницу со ссылками на современные браузеры для ie9 и ниже -->
	<!--[if lt IE 10]><script>location.href='/old-ie.html';</script><![endif]-->
	<main>
		<div class="top-block">
			<div class="wrapper">
				<div class="top-block__text">
					<h1 class="top-block__title wow slideInRight">Магистр - 15 лет помощи студентам!</h1>
					<p class="wow slideInRight" data-wow-delay="0.3s">Опытные эксперты готовы прийти на помощь</p>
					<p class="wow slideInRight" data-wow-delay="0.6s"><a href="#"><strong>Оставьте заявку</strong></a>, и мы свяжемся с Вами <br>в течение <em class="icon-clock"></em> 7 минут</p>
					<a href="#" class="btn top-block__btn"><span>Заказать работу</span></a>
				</div>
			</div>
		</div>
		<div class="services">
			<div class="wrapper">
				<h2 class="services__title">Наши услуги - ваши возможности</h2>
				<div class="services__list">
					<div class="service-card wow fadeInUp">
						<div class="service-card__pic">
							<img src="img/icons/desktop.svg" alt="" />
						</div>
						<div class="service-card__text">
							<strong class="service-card__emphasis">15 лет</strong>
							<span>Успешно решаем проблемы с учебой</span>
						</div>
					</div>
					<div class="service-card wow fadeInUp" data-wow-delay="0.2s">
						<div class="service-card__pic">
							<img src="img/icons/lecture.svg" alt="" />
						</div>
						<div class="service-card__text">
							<strong class="service-card__emphasis">100 000</strong>
							<span>Подготовленных студентов</span>
						</div>
					</div>
					<div class="service-card wow fadeInUp" data-wow-delay="0.4s">
						<div class="service-card__pic">
							<img src="img/icons/book.svg" alt="" />
						</div>
						<div class="service-card__text">
							<strong class="service-card__emphasis">более 500</strong>
							<span>Различных учебных дисциплин</span>
						</div>
					</div>
					<div class="service-card wow fadeInUp" data-wow-delay="0.6s">
						<div class="service-card__pic">
							<img src="img/icons/student.svg" alt="" />
						</div>
						<div class="service-card__text">
							<strong class="service-card__emphasis">100%</strong>
							<span>Персональный менеджер, гарантия качества</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scheme">
			<div class="wrapper">
				<div class="scheme__text">
					<h2 class="scheme__title">Путь студента <br>к душевному спокойствию</h2>
					<div class="scheme__list">
						<div class="step wow fadeInLeft">
							<div class="step__pic"><img src="img/icons/writing.svg" alt=""></div>
							<div class="step__text">Оформляете заявку </div>
						</div>
						<div class="step wow fadeInLeft" data-wow-delay="0.2s">
							<div class="step__pic"><img src="img/icons/chat.svg" alt=""></div>
							<div class="step__text">Ваш менеджер определяет стоимость услуги.<br> Долго думает какую скидку Вам предоставить </div>
						</div>
						<div class="step wow fadeInLeft" data-wow-delay="0.4s">
							<div class="step__pic"><img src="img/icons/calculation.svg" alt=""></div>
							<div class="step__text">К назначеному сроку, <br>Вы подготовлены и успешно сдадите!</div>
						</div>
					</div>
					<div class="btn scheme__btn"><span>Заказать работу</span></div>
				</div>
			</div>
		</div>
		<div class="advantages">
			<div class="wrapper">
				<div class="advantages__text">
					<h2 class="advantages__title">Блин, а кого же выбрать?</h2>
					<ol class="advantages__list">
						<li class="wow fadeInRight">“Магистр” обзвонил всех конкурентов, и у него самые выгодные цены</li>
						<li class="wow fadeInRight" data-wow-delay="0.2s">“Магистр” осуществляет проверку работ в системе “Антиплагиат ВУЗ”. <br>Заметьте, у большинства компаний нет доступа к системе</li>
						<li class="wow fadeInRight" data-wow-delay="0.4s">“Магистр” - титан рынка, 15 <br>лет труда, чтобы студенты <br>спали спокойно</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="reviews">
			<div class="wrapper">
				<h2 class="reviews__title">Счастливые клиенты передают Вам привет</h2>
				<div class="reviews__slider">
					<div class="review-card">
						<img src="img/icons/man.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Владимир</h3>
						<div class="review-card__text">Спасибо огромное, всё быстро, а самое главное в срок.</div>
						<div class="review-card__date">23.04.19</div>
					</div>
					<div class="review-card">
						<img src="img/icons/woman.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Анастасия</h3>
						<div class="review-card__text">Спасибо!!! Вы как всегда на высоте.</div>
						<div class="review-card__date">22.04.19</div>
					</div>
					<div class="review-card">
						<img src="img/icons/man.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Иван</h3>
						<div class="review-card__text">Как всегда отличная работа, своевременно, точно и быстро</div>
						<div class="review-card__date">21.04.19</div>
					</div>
					<div class="review-card">
						<img src="img/icons/man.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Владимир</h3>
						<div class="review-card__text">Спасибо огромное, всё быстро, а самое главное в срок.</div>
						<div class="review-card__date">23.04.19</div>
					</div>
					<div class="review-card">
						<img src="img/icons/woman.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Анастасия</h3>
						<div class="review-card__text">Спасибо!!! Вы как всегда на высоте.</div>
						<div class="review-card__date">22.04.19</div>
					</div>
					<div class="review-card">
						<img src="img/icons/man.svg" alt="" class="review-card__icon" />
						<h3 class="review-card__title">Иван</h3>
						<div class="review-card__text">Как всегда отличная работа, своевременно, точно и быстро</div>
						<div class="review-card__date">21.04.19</div>
					</div>
				</div>
			</div>
		</div>
		<div class="order">
			<div class="wrapper">
				<h2 class="order__title">Информация о заказе</h2>
				<div class="order__inner">
					<div class="order__item">
						<h3 class="order__subtitle">Параметры влияющие на цену</h3>
						<div class="order__multifield">
							<input type="text" placeholder="Тип работы" />
							<input type="text" placeholder="Срок" />						
						</div>
						<div class="order__multifield">
							<input type="text" placeholder="Предмет" />
							<input type="text" placeholder="Объем" />						
						</div>
					</div>
					<div class="order__item">
						<h3 class="order__subtitle">Соотношение цены и качества</h3>
						<label class="order__label"><input type="radio" name="level" value="Эксперт начального уровня"/><span>Эксперт начального уровня</span></label>
						<label class="order__label"><input type="radio" name="level" value="Эксперт среднего уровня"/><span>Эксперт среднего уровня</span></label>
						<label class="order__label"><input type="radio" name="level" value="Эксперт имеющий значительный опыт"/><span>Эксперт имеющий значительный опыт</span></label>
					</div>
					<div class="order__item">
						<textarea placeholder="Тема" rows="8"></textarea>
						<label class="file-btn"><input type="file" name="attachment" /><span>Прикрепить файл</span></label>
					</div>
					<div class="order__item">
						<textarea placeholder="Требования" rows="8"></textarea>
					</div>
					<div class="order__item">
						<button class="btn order__btn"><span>Заказать работу</span></button>
					</div>
					<div class="order__item order__price">Предварительная цена:  8000 руб</div>
				</div>
			</div>
		</div>
		<div class="contacts">			
			<?if(count($city['offices'])>1):?>
			<div class="wrapper">
				<h2 class="contacts__title">Офисы в <?=$city['alt'];?></h2>
				<div class="contacts__box">
					<? foreach($city['offices'] as $office): ?>
						<div class="contacts__item">
							<div class="contacts__address"><strong class="contacts__city"><?=$current_city;?></strong> <?=$office['address']?></div>
							<?if($office['phone']): ?>
								<div class="contacts__phone"><a href="tel:+<?=preg_replace('|\D|','',$office['phone']);?>"><?=$office['phone'];?></a></div>
							<?endif;?>
							<?if($office['email']): ?>
								<div class="contacts__email"><a href="mailto:+<?=$office['email'];?>"><?=$office['email'];?></a></div>
							<?endif;?>
							<div class="contacts__worktime">
								<h4 class="contacts__subtitle">График работы</h4>
								<?
									if($office['worktime']){
										echo $office['worktime'];
									}else{
										echo $default_worktime;
									}
								?>
							</div>
						</div>
					<? endforeach;?>
				</div>
			</div>
			<div class="contacts__map-box">
				<? foreach($city['offices'] as $index=>$office): ?>
				<div class="contacts__map small" id="map<?=$index;?>" data-address="<?=$current_city.' '.$office['address'];?>"></div>
				<?	endforeach;?>
			</div>
			<? else: ?>
				<? $office = $city['offices'][0];?>
				<div class="wrapper">
					<h2 class="contacts__title">Вы можете найти нас здесь</h2>
				</div>
				<div class="contacts__inner">
					<div class="wrapper">
						<div class="contacts__layout">
							<div class="contacts__address"><strong class="contacts__city"><?=$current_city;?></strong> <?=$office['address']?></div>
							<?if($office['phone']): ?>
								<div class="contacts__phone"><a href="tel:+<?=preg_replace('|\D|','',$office['phone']);?>"><?=$office['phone'];?></a></div>
							<?endif;?>
							<?if($office['email']): ?>
								<div class="contacts__email"><a href="mailto:+<?=$office['email'];?>"><?=$office['email'];?></a></div>
							<?endif;?>
							<div class="contacts__worktime">
								<h4 class="contacts__subtitle">График работы</h4>
								<?
									if($office['worktime']){
										echo $office['worktime'];
									}else{
										echo $default_worktime;
									}
								?>
							</div>
						</div>						
					</div>
					<div class="contacts__map bg" id="map0" data-address="<?=$current_city.' '.$office['address'];?>"></div>
				</div>
			<? endif; ?>
		</div>
		<div class="offices">
			<div class="wrapper">
				<h2 class="offices__title">Наши офисы</h2>
				<div class="offices__box">
					<? 
						foreach($cities as $name=>$opt):
							foreach($opt['offices'] as $office):
					?>
						<div class="offices__item">
							<h3 class="offices__subtitle"><a href="<?=$opt['link'];?>.php"><?=$name;?></a></h3>
							<?=$office['address']?> <br>тел. <?=$office['phone']?>
						</div>
					<? 
							endforeach;
						endforeach;
					?>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="wrapper footer__wrapper">
			<span class="logo footer__logo"><img src="img/logo.png" alt=""></span>
			<div class="footer__social">
				<h4 class="footer__subtitle">Мы в социальных сетях</h4>
				<a href="//vk.com" target="_blank"><img src="img/icons/vk.svg"/></a>
				<a href="//instagram.com" target="_blank"><img src="img/icons/instagram.svg"/></a>
			</div>
			<div class="footer__payment">
				<h4 class="footer__subtitle">Мы принимаем:</h4>
				<img src="img/icons/visa.svg"/>
				<img src="img/icons/mastercard.svg"/>
			</div>
			<div class="footer__copy">© 2004 — 2019, diplomaster.com. Все права защищены.</div>
		</div>
	</footer>
	<div class="modal" id="location">
		<span class="modal__close">✕</span>
			<ul class="location">
				<?
					foreach($cities as $item=>$opt):
						if($item != $current_city):
				?>
					<li><a href="<?=$opt['link']?>.php"><?=$item ?></a></li>
				<? 
						endif;
					endforeach;
				?>
			</ul>
	</div>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" defer></script>
	<script src="//code.jquery.com/jquery-latest.min.js" defer></script>
	<script src="libs/slick/slick.min.js" defer></script>
	<script src="libs/wow/wow.min.js" defer></script>
	<script src="js/script.js" defer></script>	
</body>
</html>