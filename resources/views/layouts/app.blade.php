<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		@vite(['resources/scss/app.scss'])
		<title>@yield('content')</title>
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="header__inner">
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

					<div class="main" style="width: 100px">
						<img style="margin: 0 auto" src="images/герб.png" alt="" />
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
						<li class="menu__li">
							<a class="menu__link" href="#">Про управління</a>
							<ul class="submenu">
								<li><a href="http://kr.consumer.gov.ua/doc/struktura/polozhennya.pdf">Про Головне управління</a></li>
								<li><a href="http://kr.consumer.gov.ua/doc/kadri/struktura.pdf">Структура</a></li>
								<li><a href="{{ route('rozporiadok-roboty') }}">Розпорядок роботи</a></li>
								<li><a href="{{ route('profspilka') }}">Профспілкова організація</a></li>
								<li><a href="#">Кадрова політика</a></li>
								<li><a href="#">Очищення влади</a></li>
								<li><a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a></li>
								<li><a href="http://vetlabkr.pp.ua/">Кіровоградська регіональна державна лабораторія ветеринарної медицини</a></li>
							</ul>
						</li>
						<li class="menu__li">
							<a class="menu__link" href="#">Діяльність</a>
							<ul class="submenu">
								<li><a href="#">Суб'єктам господарювання</a></li>
								<li><a href="#">Внутрішній аудит</a></li>
								<li><a href="#">Оцінювання службової діяльності посадових осіб</a></li>
								<li><a href="#">Закупівлі</a></li>
								<li><a href="#">Плани та звіти про виконання</a></li>
								<li><a href="#">Система енергетичного менеджменту</a></li>
							</ul>
						</li>
						<li class="menu__li">
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
						<li class="menu__li"><a class="menu__link" href="#">У воєнний час</a></li>
					</ul>
					<div class="search">
						<i class="fa-solid fa-magnifying-glass"></i>
						<p class="search__text">Пошук</p>
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
					<div class="btns">
						<i class="fa-solid fa-arrow-left"></i>
						<i class="fa-solid fa-arrow-right"></i>
					</div>

					<h2 class="links__title">Посилання</h2>

					<div class="links__list">
						<div class="link">
							<img src="images/img3.png" alt="" />
						</div>
						<div class="link">
							<img src="images/img4.png" alt="" />
						</div>
						<div class="link">
							<img src="images/img5.png" alt="" />
						</div>
						<div class="link">
							<img src="images/img6.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="map">
			<div class="container">
				<h2 class="map__title">Мапа порталу</h2>
				<div class="map__inner">
					<ul class="items">
						<li class="items__item"><a href="#">Про управління</a></li>
						<li class="items__item"><a href="#">Про Головне управління</a></li>
						<li class="items__item"><a href="#">Структура</a></li>
						<li class="items__item"><a href="#">Розпорядок роботи</a></li>
						<li class="items__item">
							<a href="#">Профспілкова організація</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Колективний договір</a></li>
								<li class="subitems__item"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Кадрова політика</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Вакансії</a></li>
								<li class="subitems__item"><a href="#">Конкурс - вакансії</a></li>
								<li class="subitems__item"><a href="#">Зразки документів</a></li>
								<li class="subitems__item"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="subitems__item"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="items__item"><a href="#">Очищення влади</a></li>
						<li class="items__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
					<ul class="items">
						<li class="items__item"><a href="#">Діяльність</a></li>
						<li class="items__item">
							<a href="#">Суб'єктам господарювання</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Декларації малих виробництв виноробної продукції</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Внутрішній аудит</a>
							<ul class="subitems">
								<li class="subitems__item">
									<a href="#">Планування діяльності</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Оперативний план діяльності Держпродспоживслужби з внутрішнього аудиту на 2020 рік</a></li>
										<li class="subitems__item"><a href="#">Стратегічний план діяльності Держпродспоживслужби з внутрішнього аудиту на 2019 - 2021 роки (із змінами)</a></li>
										<li class="subitems__item"><a href="#">План діяльності з внутрішнього аудиту в Держпродспоживслужби та її територіальних органах на ІІ півріччя 2018 року</a></li>
									</ul>
								</li>
								<li class="subitems__item">
									<a href="#">Основні напрямки діяльності</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Декларація внутрішнього аудиту</a></li>
									</ul>
								</li>
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
							</ul>
						</li>
						<li class="items__item"><a href="#">Оцінювання службової діяльності посадових осіб</a></li>
						<li class="items__item"><a href="#">Закупівлі</a></li>
						<li class="items__item"><a href="#">Плани та звіти про виконання</a></li>
						<li class="items__item"><a href="#">Система енергетичного менеджменту</a></li>
					</ul>
					<ul class="items">
						<li class="items__item"><a href="#">Напрямки</a></li>
						<li class="items__item">
							<a href="#">Контроль за цінами</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">В умовах воєнного стану</a></li>
								<li class="subitems__item"><a href="#">Заходи щодо стабілізації цін (COVID-19)</a></li>
								<li class="subitems__item"><a href="#">Основні напрямки діяльністі</a></li>
								<li class="subitems__item"><a href="#">Державний контроль за регульованими цінами</a></li>
								<li class="subitems__item"><a href="#">Актуальна інформація</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Фітосанітарна безпека, насінництво та розсадництво</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Основні напрямки діяльності</a></li>
								<li class="subitems__item"><a href="#">Пам'ятки</a></li>
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="subitems__item">
									<a href="#">Довідники</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Наказ перелік регульованих шкідливих організмів</a></li>
										<li class="subitems__item"><a href="#">Переліки шкідливих організмів А1 та А2 ЄОКЗР</a></li>
									</ul>
								</li>
								<li class="subitems__item"><a href="#">Фітосанітарний моніторинг і прогноз</a></li>
								<li class="subitems__item"><a href="#">Фітосанітарні вимоги країн імпортерів</a></li>
								<li class="subitems__item"><a href="#">Адміністративні послуги</a></li>
								<li class="subitems__item"><a href="#">Перелік тестових питань та варіанти відповідей для проходження тестування осіб, діяльність яких пов’язана з транспортуванням, зберіганням, застосуванням, торгівлею пестицидами</a></li>
								<li class="subitems__item"><a href="#">Фітосанітарний стан області</a></li>
								<li class="subitems__item"><a href="#">Розпорядження про запровадження або скасування карантинного режиму, у тому числі переліку територій, на яких запроваджено карантинний режим</a></li>
								<li class="subitems__item">
									<a href="#">Бланки фітосанітарних документів та заяв</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Заява на оформлення фітосанітарного сертифіката, фітосанітарного сертифіката на реекспорт, карантинного сертифіката</a></li>
										<li class="subitems__item"><a href="#">Заява на обстеження КНР</a></li>
										<li class="subitems__item"><a href="#">Фітосанітарний сертифікат</a></li>
										<li class="subitems__item"><a href="#">Заява про встановлення статусу вільних ділянок</a></li>
										<li class="subitems__item"><a href="#">Карантинний сертифікат</a></li>
										<li class="subitems__item"><a href="#">Заява про проведення перевірки та реєстрацію особи</a></li>
										<li class="subitems__item"><a href="#">Заява на проведення фітосанітарних процедур</a></li>
									</ul>
								</li>
								<li class="subitems__item"><a href="#">Рекомендації щодо торгівлі насінням</a></li>
								<li class="subitems__item"><a href="#">Перелік лабораторій з визначення посівних якостей насіння</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Харчові продукти та ветеринарна медицина</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Основні напрямки діяльності</a></li>
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="subitems__item"><a href="#">Пам'ятки</a></li>
								<li class="subitems__item">
									<a href="#">Реєстри</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Заява про державну реєстрацію потужності з додатком</a></li>
									</ul>
								</li>
								<li class="subitems__item"><a href="#">Звіти</a></li>
								<li class="subitems__item"><a href="#">Повідомлення</a></li>
								<li class="subitems__item"><a href="#">Адміністративні послуги</a></li>
								<li class="subitems__item"><a href="#">Повідомлення системи швидкого оповіщення щодо харчових продуктів та кормів RASFF</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Санітарно-епідеміологічний нагляд</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Основні напрямки діяльності</a></li>
								<li class="subitems__item"><a href="#">Державний нагляд (контроль)</a></li>
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="subitems__item"><a href="#">Адміністративні послуги</a></li>
								<li class="subitems__item"><a href="#">Матеріали семінарів</a></li>
								<li class="subitems__item"><a href="#">Пам'ятки</a></li>
								<li class="subitems__item"><a href="#">Актуальна інформація щодо проведення державної санітарно-епідеміологічної експертизи</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Захист прав споживачів</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Анонси</a></li>
								<li class="subitems__item"><a href="#">Консультаційний центр</a></li>
								<li class="subitems__item"><a href="#">Основні напрямки діяльності</a></li>
								<li class="subitems__item"><a href="#">Державний нагляд (контроль)</a></li>
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="subitems__item"><a href="#">Бланки заяв</a></li>
								<li class="subitems__item"><a href="#">Судова практика</a></li>
								<li class="subitems__item">
									<a href="#">Ринковий нагляд</a>
									<ul class="subitems">
										<li class="subitems__item"><a href="#">Щодо здійснення державного ринкового нагляду</a></li>
										<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
										<li class="subitems__item"><a href="#">Пам'ятки</a></li>
										<li class="subitems__item"><a href="#">Технічний регламент</a></li>
									</ul>
								</li>
								<li class="subitems__item"><a href="#">Метрологічний нагляд</a></li>
								<li class="subitems__item"><a href="#">Презентаційний звіт управління захисту споживачів</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Реєстрація сільськогосподарської техніки</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Перелік нормативно-правових актів</a></li>
								<li class="subitems__item"><a href="#">Прийом документів</a></li>
								<li class="subitems__item"><a href="#">Новини</a></li>
							</ul>
						</li>
					</ul>
					<ul class="items">
						<li class="items__item"><a href="#">Про управління</a></li>
						<li class="items__item"><a href="#">Про Головне управління</a></li>
						<li class="items__item"><a href="#">Структура</a></li>
						<li class="items__item"><a href="#">Розпорядок роботи</a></li>
						<li class="items__item">
							<a href="#">Профспілкова організація</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Колективний договір</a></li>
								<li class="subitems__item"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Кадрова політика</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Вакансії</a></li>
								<li class="subitems__item"><a href="#">Конкурс - вакансії</a></li>
								<li class="subitems__item"><a href="#">Зразки документів</a></li>
								<li class="subitems__item"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="subitems__item"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="items__item"><a href="#">Очищення влади</a></li>
						<li class="items__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
          <ul class="items">
						<li class="items__item"><a href="#">Про управління</a></li>
						<li class="items__item"><a href="#">Про Головне управління</a></li>
						<li class="items__item"><a href="#">Структура</a></li>
						<li class="items__item"><a href="#">Розпорядок роботи</a></li>
						<li class="items__item">
							<a href="#">Профспілкова організація</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Колективний договір</a></li>
								<li class="subitems__item"><a href="#">Бланк заяви для вступу</a></li>
							</ul>
						</li>
						<li class="items__item">
							<a href="#">Кадрова політика</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Вакансії</a></li>
								<li class="subitems__item"><a href="#">Конкурс - вакансії</a></li>
								<li class="subitems__item"><a href="#">Зразки документів</a></li>
								<li class="subitems__item"><a href="#">Інформація про втрачені посвідчення</a></li>
								<li class="subitems__item"><a href="#">Результати конкурсів</a></li>
							</ul>
						</li>
						<li class="items__item"><a href="#">Очищення влади</a></li>
						<li class="items__item">
							<a href="#">Державні установи (лабораторії, лікарні) ветеринарної медицини</a>
							<ul class="subitems">
								<li class="subitems__item"><a href="#">Ціни</a></li>
							</ul>
						</li>
					</ul>
          
				</div>
			</div>
		</div>
    
	</body>
</html>