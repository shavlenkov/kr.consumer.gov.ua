@extends('layouts.app')

@section('title', 'Rozporiadok roboty')

@section('content')
					<ol class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{ route('main') }}">Головна</a></li>
						<li class="breadcrumb__item">Про управління</li>
						<li class="breadcrumb__item">Розпорядок роботи</li>
					</ol>
					<div class="schedule">
						<h2 class="schedule__title">Розпорядок роботи</h2>
            <table class="schedule__table">
              <tr>
                <td>понеділок-четвер</td>
                <td>з 8.00 до 17.00 години</td>
              </tr>
              <tr>
                <td>п’ятниця</td>
                <td>з 8.00 до 15.45 години</td>
              </tr>
              <tr>
                <td>обідня перерва</td>
                <td>з 12.00 до 12.45 години</td>
              </tr>
            </table>
					</div>


@endsection