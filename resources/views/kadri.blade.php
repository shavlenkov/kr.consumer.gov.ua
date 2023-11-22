@extends('layouts.app')

@section('title', 'Profspilka')

@section('content')

	<ol class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('main') }}">Головна</a></li>
						<li class="breadcrumb__item">Про управління</li>
						<li class="breadcrumb__item">Кадрова політика</li>
					</ol>

  	<div class="list">
			<div class="container">
				<h2 class="list__title">Кадрова політика</h2>
				<div class="list__inner">
					<ul class="list__items">
							<li class="list__item"><a href="#">Вакансії</a></li>
							<li class="list__item"><a href="#">Конкурс - вакансії</a></li>
              <li class="list__item"><a href="#">Зразки документів</a></li>
							<li class="list__item"><a href="#">Інформація про втрачені посвідчення</a></li>
              <li class="list__item"><a href="#">Результати конкурсів</a></li>
					</ul>
        </ul>
      </div>
  </div>

  



@endsection