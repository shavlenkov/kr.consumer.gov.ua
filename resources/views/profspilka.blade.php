@extends('layouts.app')

@section('title', 'Profspilka')

@section('content')

	<ol class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('main') }}">Головна</a></li>
						<li class="breadcrumb__item">Про управління</li>
						<li class="breadcrumb__item">Профспілкова організація</li>
					</ol>

	<div class="map">
			<div class="container">
				<h2 class="map__title">Профспілкова організація</h2>
				<div class="map__inner">
					<ul class="items">
						<li class="items__item"><a href="#">Колективний договір</a></li>
						<li class="items__item"><a href="#">Бланк заяви для вступу</a></li>
          </ul>
        </div>
      </div>
  </div>




@endsection