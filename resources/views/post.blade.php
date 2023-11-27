@extends('layouts.app')

@section('title', 'Profspilka')

@section('content')

<div class="post">
  <div class="container">
    <div class="post__inner">
      <h2 class="post__inner-title">{{ $post->title }}</h2>
      <p>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY', 'en') }}</p>

      {!! $post->long_description !!}

    </div>
  </div>
</div>


@endsection