<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		@vite(['resources/scss/app.scss'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div style="border-radius: 0;  background-color: #1B3764;" id="ex1" class="modal">
       <ul style="text-align: center">
				<li><a href="#">Президент України</a></li>
				<li><a href="#">Верховна Рада</a></li>
				<li><a href="#">Урядовий портал</a></li>
				<li><a href="#">Конституційний суд України</a></li>
				<li><a href="#">Рада національної безпеки <br/> і оборони Україниіння</a></li>
			 </ul>
     </div>
		<div class="header">
			<div class="container">
				<div class="header__inner">
						<a style="text-decoration: none;" href="#ex1" rel="modal:open">
					<div class="logo">
						<div class="logo__prapor">
							<div class="logo__prapor-blue"></div>
							<div class="logo__prapor-yellow"></div>
						</div>
						<div class="logo__text">
							<div class="logo__text-site">gov.ua</div>
							<div class="logo__text-title">Державні сайти України</div>
						</div>
					</div>
						</a>

					<div class="main" style="width: 100px">
						<img style="margin: 0 auto" src="{{ asset('images/герб.png') }}" alt="" />
					</div>
					<div class="noeye">
						<i class="fa-sharp fa-solid fa-eye-slash"></i>
						<p class="noeye__text">
							Людям із <br />
							порушенням зору
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="intro">
			<div class="container">
				<div class="intro__inner">
					<h2 style="margin: 0; color: #fff; font-size: 32px; text-align: center; line-height: 48px">
						Головне управління<br />
						Держпродспоживслужби<br />
						в Кіровоградській області
					</h2>
					<p style="margin: 0; color: #fff; font-size: 18px; text-align: center; line-height: 48px">Офіційний веб-сайт (веб-портал)</p>
				</div>
			</div>
		</div>
		<div class="nav">
			<div class="container">
				<div class="nav__inner">
					<ul class="menu">
						{{-- <li class="menu__li">
							<a class="menu__link" href="#">Про управління</a>
							<ul class="submenu">
								<li><a href="http://kr.consumer.gov.ua/doc/struktura/polozhennya.pdf">Про Головне управління</a></li>
								<li><a href="http://kr.consumer.gov.ua/doc/kadri/struktura.pdf">Структура</a></li>
								<li><a href="{{ route('rozporiadok-roboty') }}">Розпорядок роботи</a></li>
								<li><a href="{{ route('profspilka') }}">Профспілкова організація</a></li>
								<li><a href="{{ route('kadri') }}">Кадрова політика</a></li>
								<li><a href="{{ route('ochyshchennia-vlady') }}">Очищення влади</a></li>
								<li><a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a></li>
								<li><a href="http://vetlabkr.pp.ua/">Кіровоградська регіональна державна лабораторія ветеринарної медицини</a></li>
							</ul>
						</li> --}}
						@foreach(App\Models\Menu::all() as $item)
						<li class="menu__li">
							<a class="menu__link" href="#">{{ $item->name }}</a>
							<ul class="submenu">
								@foreach($item->submenus as $subitem)
								<li><a href="{{ $subitem->url }}">{{ $subitem->name }}</a></li>
								@endforeach
							</ul>
						</li>
						@endforeach
						{{-- <li class="menu__li">
							<a class="menu__link" href="#">Напрямки</a>
							<ul class="submenu">
								<li><a href="#">Контроль за цінами</a></li>
								<li><a href="#">Фітосанітарна безпека, насінництво та розсадництво</a></li>
								<li><a href="#">Оцінювання службової діяльності посадових осіб</a></li>
								<li><a href="#">Закупівлі</a></li>
								<li><a href="#">Плани та звіти про виконання</a></li>
								<li><a href="#">Система енергетичного менеджменту</a></li>
							</ul>
						</li>
						<li class="menu__li"><a class="menu__link" href="#">Публічна інформація</a></li>
						<li class="menu__li"><a class="menu__link" href="#">Зв'язки з громадкістю</a></li>
						<li class="menu__li"><a class="menu__link" href="#">Стоп корупція</a></li>
						<li class="menu__li"><a class="menu__link" href="#">У воєнний час</a></li> --}}
					</ul>
					<div class="search">
						<i class="fa-solid fa-magnifying-glass"></i>
						<div class="search__text"><p>Пошук</p></p>
						<div class="search__block">
							<h5 class="search__block-title">Пошук на порталі</h5>
							<form class="search__block-form" action="">
							<input class="search__block-input" type="text">
							<button class="search__block-btn"><b>Знайти</b></button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="content">
      <div class="container">
        <div class="content__inner">
          @yield('content')
        </div>
      </div>
    </div>
    <div class="links">
			<div class="container">
				<div class="links__inner">

					<h2 class="links__title">Посилання</h2>

					<div class="links__list">

						@foreach(App\Models\Banner::all() as $banner)
						  <div class="link">
							   <a target="{{ str_contains(config('app.url'), $banner->url) ? '_self' : '_new' }}" href="{{ $banner->url }}"><img width="255" height="200" src="{{ asset('/storage/'.$banner->image_url) }}" alt="" /></a>
						  </div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
    <div class="map">
			<div class="container">
				<h2 class="map__title">Мапа порталу <span id="btn"><i class="fa-solid fa-arrow-down"></i></span></h2>
				<div class="map__inner" id="m">
					<ul class="map__items"> 
						<li class="map__item"><a href="#">Про управління</a></li>
						<li class="map__item"><a href="#">Про Головне управління</a></li>
						<li class="map__item"><a href="#">Структура</a></li>
						<li class="map__item"><a href="#">Розпорядок роботи</a></li>
						<li class="map__item">
							<a href="#">Профспілкова організація</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Колективний договір</a></li>
								<li class="map__subitem"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Кадрова політика</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Вакансії</a></li>
								<li class="map__subitem"><a href="#">Конкурс - вакансії</a></li>
								<li class="map__subitem"><a href="#">Зразки документів</a></li>
								<li class="map__subitem"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="map__subitem"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="map__item"><a href="#">Очищення влади</a></li>
						<li class="map__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
					<ul class="map__items">
						<li class="map__item"><a href="#">Діяльність</a></li>
						<li class="map__item">
							<a href="#">Суб'єктам господарювання</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Декларації малих виробництв виноробної продукції</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Внутрішній аудит</a>
							<ul class="map__subitems">
								<li class="map__subitem">
									<a href="#">Планування діяльності</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Оперативний план діяльності Держпродспоживслужби з внутрішнього аудиту на 2020 рік</a></li>
										<li class="map__subitem"><a href="#">Стратегічний план діяльності Держпродспоживслужби з внутрішнього аудиту на 2019 - 2021 роки (із змінами)</a></li>
										<li class="map__subitem"><a href="#">План діяльності з внутрішнього аудиту в Держпродспоживслужби та її територіальних органах на ІІ півріччя 2018 року</a></li>
									</ul>
								</li>
								<li class="map__item">
									<a href="#">Основні напрямки діяльності</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Декларація внутрішнього аудиту</a></li>
									</ul>
								</li>
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
							</ul>
						</li>
						<li class="map__item"><a href="#">Оцінювання службової діяльності посадових осіб</a></li>
						<li class="map__item"><a href="#">Закупівлі</a></li>
						<li class="map__item"><a href="#">Плани та звіти про виконання</a></li>
						<li class="map__item"><a href="#">Система енергетичного менеджменту</a></li>
					</ul>
					<ul class="map__items">
						<li class="map__item"><a href="#">Напрямки</a></li>
						<li class="map__item">
							<a href="#">Контроль за цінами</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">В умовах воєнного стану</a></li>
								<li class="map__subitem"><a href="#">Заходи щодо стабілізації цін (COVID-19)</a></li>
								<li class="map__subitem"><a href="#">Основні напрямки діяльністі</a></li>
								<li class="map__subitem"><a href="#">Державний контроль за регульованими цінами</a></li>
								<li class="map__subitem"><a href="#">Актуальна інформація</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Фітосанітарна безпека, насінництво та розсадництво</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Основні напрямки діяльності</a></li>
								<li class="map__subitem"><a href="#">Пам'ятки</a></li>
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="map__subitem">
									<a href="#">Довідники</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Наказ перелік регульованих шкідливих організмів</a></li>
										<li class="map__subitem"><a href="#">Переліки шкідливих організмів А1 та А2 ЄОКЗР</a></li>
									</ul>
								</li>
								<li class="map__subitem"><a href="#">Фітосанітарний моніторинг і прогноз</a></li>
								<li class="map__subitem"><a href="#">Фітосанітарні вимоги країн імпортерів</a></li>
								<li class="map__subitem"><a href="#">Адміністративні послуги</a></li>
								<li class="map__subitem"><a href="#">Перелік тестових питань та варіанти відповідей для проходження тестування осіб, діяльність яких пов’язана з транспортуванням, зберіганням, застосуванням, торгівлею пестицидами</a></li>
								<li class="map__subitem"><a href="#">Фітосанітарний стан області</a></li>
								<li class="map__subitem"><a href="#">Розпорядження про запровадження або скасування карантинного режиму, у тому числі переліку територій, на яких запроваджено карантинний режим</a></li>
								<li class="map__subitem">
									<a href="#">Бланки фітосанітарних документів та заяв</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Заява на оформлення фітосанітарного сертифіката, фітосанітарного сертифіката на реекспорт, карантинного сертифіката</a></li>
										<li class="map__subitem"><a href="#">Заява на обстеження КНР</a></li>
										<li class="map__subitem"><a href="#">Фітосанітарний сертифікат</a></li>
										<li class="map__subitem"><a href="#">Заява про встановлення статусу вільних ділянок</a></li>
										<li class="map__subitem"><a href="#">Карантинний сертифікат</a></li>
										<li class="map__subitem"><a href="#">Заява про проведення перевірки та реєстрацію особи</a></li>
										<li class="map__subitem"><a href="#">Заява на проведення фітосанітарних процедур</a></li>
									</ul>
								</li>
								<li class="map__subitem"><a href="#">Рекомендації щодо торгівлі насінням</a></li>
								<li class="map__subitem"><a href="#">Перелік лабораторій з визначення посівних якостей насіння</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Харчові продукти та ветеринарна медицина</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Основні напрямки діяльності</a></li>
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="map__subitem"><a href="#">Пам'ятки</a></li>
								<li class="map__subitem">
									<a href="#">Реєстри</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Заява про державну реєстрацію потужності з додатком</a></li>
									</ul>
								</li>
								<li class="map__subitem"><a href="#">Звіти</a></li>
								<li class="map__subitem"><a href="#">Повідомлення</a></li>
								<li class="map__subitem"><a href="#">Адміністративні послуги</a></li>
								<li class="map__subitem"><a href="#">Повідомлення системи швидкого оповіщення щодо харчових продуктів та кормів RASFF</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Санітарно-епідеміологічний нагляд</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Основні напрямки діяльності</a></li>
								<li class="map__subitem"><a href="#">Державний нагляд (контроль)</a></li>
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="map__subitem"><a href="#">Адміністративні послуги</a></li>
								<li class="map__subitem"><a href="#">Матеріали семінарів</a></li>
								<li class="map__subitem"><a href="#">Пам'ятки</a></li>
								<li class="map__subitem"><a href="#">Актуальна інформація щодо проведення державної санітарно-епідеміологічної експертизи</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Захист прав споживачів</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Анонси</a></li>
								<li class="map__subitem"><a href="#">Консультаційний центр</a></li>
								<li class="map__subitem"><a href="#">Основні напрямки діяльності</a></li>
								<li class="map__subitem"><a href="#">Державний нагляд (контроль)</a></li>
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="map__subitem"><a href="#">Бланки заяв</a></li>
								<li class="map__subitem"><a href="#">Судова практика</a></li>
								<li class="map__subitem">
									<a href="#">Ринковий нагляд</a>
									<ul class="map__subitems">
										<li class="map__subitem"><a href="#">Щодо здійснення державного ринкового нагляду</a></li>
										<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
										<li class="map__subitem"><a href="#">Пам'ятки</a></li>
										<li class="map__subitem"><a href="#">Технічний регламент</a></li>
									</ul>
								</li>
								<li class="map__subitem"><a href="#">Метрологічний нагляд</a></li>
								<li class="map__subitem"><a href="#">Презентаційний звіт управління захисту споживачів</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Реєстрація сільськогосподарської техніки</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="map__subitem"><a href="#">Прийом документів</a></li>
								<li class="map__subitem"><a href="#">Новини</a></li>
							</ul>
						</li>
					</ul>
					<ul class="map__items">
						<li class="map__item"><a href="#">Про управління</a></li>
						<li class="map__item"><a href="#">Про Головне управління</a></li>
						<li class="map__item"><a href="#">Структура</a></li>
						<li class="map__item"><a href="#">Розпорядок роботи</a></li>
						<li class="map__item">
							<a href="#">Профспілкова організація</a>
							<ul class="subitems">
								<li class="map__subitem"><a href="#">Колективний договір</a></li>
								<li class="map__subitem"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Кадрова політика</a>
							<ul class="subitems">
								<li class="map__subitem"><a href="#">Вакансії</a></li>
								<li class="map__subitem"><a href="#">Конкурс - вакансії</a></li>
								<li class="map__subitem"><a href="#">Зразки документів</a></li>
								<li class="map__subitem"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="map__subitem"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="map__item"><a href="#">Очищення влади</a></li>
						<li class="map__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
          <ul class="map__items">
						<li class="map__item"><a href="#">Про управління</a></li>
						<li class="map__item"><a href="#">Про Головне управління</a></li>
						<li class="map__item"><a href="#">Структура</a></li>
						<li class="map__item"><a href="#">Розпорядок роботи</a></li>
						<li class="map__item">
							<a href="#">Профспілкова організація</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Колективний договір</a></li>
								<li class="map__subitem"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="map__item">
							<a href="#">Кадрова політика</a>
							<ul class="subitems">
								<li class="map__subitem"><a href="#">Вакансії</a></li>
								<li class="map__subitem"><a href="#">Конкурс - вакансії</a></li>
								<li class="map__subitem"><a href="#">Зразки документів</a></li>
								<li class="map__subitem"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="map__subitem"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="map__item"><a href="#">Очищення влади</a></li>
						<li class="map__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="map__subitems">
								<li class="map__subitem"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
          
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer__inner">
					<div class="copyright">© 2016-2023 Головне управління Держпродспоживслужби в Кіровоградській області.
Усі права на матеріали, що розміщено на даному сайті, охороняються відповідно до чинного законодавства України. При будь-якому використанні матеріалів сайту, гіперпосилання на сайт обов'язкове.</div>
<ul class="social">
	<li class="social__item"><img src="images/Exclude.png" alt=""></li>
	<li class="social__item"><img src="images/facebook.png" alt=""></li>
</ul>	
<div class="develop">Розробка сайту:<br/>
<a href="https://doroshenko.agency">Doroshenko agency</a>
</div>
			</div>
		</div>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
@vite(['resources/js/app.js'])
	</body>
</html>
