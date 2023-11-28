@extends('layouts.app')

@section('title', 'Profspilka')

@section('content')


	<div class="list">
			<div class="container">
				<h2 class="list__title">{{ $submenu->name }}</h2>
				<div class="list__inner">
					<ul class="list__items">

            @foreach($submenu->pages as $page)
							<li class="list__item"><a href="{{ $page->url }}">{{ $page->name }}</a></li>
            @endforeach
					</ul>
        </ul>
      </div>
  </div>




@endsection