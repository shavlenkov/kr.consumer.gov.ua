@extends('layouts.app')

@section('title', 'Hello')


@section('content')
<div class="blocks">
					<div class="block">
						<div class="events">
							<div class="btns">
								<i class="fa-solid fa-arrow-left"></i>
								<i class="fa-solid fa-arrow-right"></i>
							</div>
							<h2 class="events__title">Події</h2>

							@foreach(App\Models\Post::events()->get() as $event)
							<div class="event">
								<img width="350" height="220" src="{{ asset('/storage/'.$event->image_url) }}" alt="" />
								<p style="font-size: 18px; color: #2d5ca6">Прем’єр-міністр: Україна налаштована реалізувати модель справедливої трансформації вугільних регіонів</p>
								<p style="font-size: 16px; color: #6d727c">12 липня 2023</p>
							</div>
							@endforeach
						</div>
						<div class="videostories">
							<div class="btns">
								<i class="fa-solid fa-arrow-left"></i>
								<i class="fa-solid fa-arrow-right"></i>
							</div>
							<h2 class="videostories__title">Відеосюжети</h2>

							@foreach(App\Models\Post::videostories()->get() as $videostory)
							<div class="videostory">
								<img width="350" height="220" src="{{ asset('/storage/'.$videostory->image_url) }}" alt="" />
								<p style="font-size: 18px; color: #2d5ca6">Промова Прем’єр-міністра України Дениса Шмигаля на засіданні Уряду 10 листопада</p>
								<p style="font-size: 16px; color: #6d727c">12 липня 2023</p>
							</div>
							@endforeach

						</div>
					</div>
					<div class="announcements">
						<h2 class="announcements__title">Анонси</h2>
						@foreach(App\Models\Post::announcements()->get() as $announcement)
						<div class="announcement">
							<p style="font-size: 18px; color: #2d5ca6">{{ $announcement->title }}</p>
							<p style="font-size: 16px; color: #6d727c">{{ Carbon\Carbon::parse($announcement->created_at)->isoFormat('D MMMM YYYY', 'en') }}</p>
						</div>
						@endforeach
					</div>
					<div class="news">
						<h2 class="news__title">Новини</h2>
						@foreach(App\Models\Post::news()->get() as $new)
						<div class="new">
							<p style="font-size: 18px; color: #2d5ca6">{{ $new->title }}</p>
							<p style="font-size: 16px; color: #6d727c">{{ Carbon\Carbon::parse($new->created_at)->isoFormat('D MMMM YYYY', 'en') }}</p>
						</div>
						@endforeach
					</div>
</div>
		
@endsection