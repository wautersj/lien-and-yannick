@extends('layout')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => false
    ])

    <div class="section pb-xl-6">
        <div class="container">

            <div class="js-animated-block">
                <div class="row justify-content-center mn-0">
                    <div class="col col-12 col-lg-8 col-xl-6 text-center">
                        <h1 class="js-animated-element to-animate animate-from-bottom prepared">{{ $title }}</h1>
                        <p class="text-muted js-animated-element to-animate animate-from-bottom prepared">Hier kan je volgen hoe het programma van onze dag er zal uit zien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light">
        <div class="container">
            <div class="program-listing js-animated-block">
                {{-- {{dd($listing)}} --}}

                @foreach ($listing as $item)
                <div class="list-item js-animated-element to-animate animate-from-bottom prepared">
                    <div class="time">
                        {{$item->time}}
                    </div>
                    <div class="icon">
                        @if($item->icon_asset ?? null)
                            <img src="{{ Statamic::tag('glide')->params(['src' => $item->icon_asset, 'height' => 80, 'format' => 'webp'])->fetch() }}" alt="Icon asset" />
                        @endif
                    </div>
                    <div class="description">
                        {!! $item->description ?? null !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
