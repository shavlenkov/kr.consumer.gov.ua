@extends('layouts.app')

@section('title', 'Profspilka')

@section('content')

	<ol class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('main') }}">Головна</a></li>
						<li class="breadcrumb__item">Про управління</li>
						<li class="breadcrumb__item">Профспілкова організація</li>
					</ol>

	<div class="list">
			<div class="container">
				<h2 class="list__title">Профспілкова організація</h2>
				<div class="list__inner">
					<ul class="list__items">
							<li class="list__item"><a href="#">Колективний договір</a></li>
								<li class="list__item"><a href="#">Бланк заяви для вступу</a></li>
					</ul>
        </ul>
      </div>
  </div>




@endsection