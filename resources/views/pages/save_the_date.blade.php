@extends('layout')

@section('content')
    <div class="container">
        <h1 class="font-great-vibes display-1">Lien & Yannick</h1>
        <h2 class="fw-normal">Save the date</h2>

        <p>{{$asset}}</p>


        <p>Direct:</p>
        <img src="{{$asset}}" alt="" class="w-100"/>

        <p>Glide:</p>
        <img src="{{ Statamic::tag('glide')->params(['src' => $asset, 'width' => 1200, 'format' => 'webp'])->fetch() }}" alt="Thumb">
    </div>
@endsection
