@extends('layout')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => false
    ])

    <div class="section">
        <div class="container">
            <h1 class="text-center mb-5 mb-lg-10">{{ $title }}</h1>


            @foreach ($locations as $location)
                <div class="row left-right {{ ($loop->index % 2) ? 'odd' : 'even' }}">
                    <div class="col col-asset col-12 col-lg-6 col-xl-5 mx-auto">
                        @php($asset = $location->asset)
                        <div class="asset asset-luminosity @if( empty($location["asset"]) ) empty @endif js-animated-element to-animate animate-from-bottom prepared">
                            @if( !empty($asset->id) )
                                <img src="{{ Statamic::tag('glide')->params(['src' => $asset->id, 'width' => 960, 'format' => 'webp'])->fetch() }}" alt="{{ $asset->alt ?? "" }}">
                            @endif
                        </div>
                    </div>
                    <div class="col col-content col-12 col-lg-6 col-xl-5 mx-auto">
                        <h3>{{ $location->title }}</h3>
                        <ul>
                            <li>
                                <span>Adres:</span>
                                <ul>
                                    <li>{{ $location->adres_line_1 }}</li>
                                    <li>{{ $location->adres_line_2 }}</li>
                                </ul>
                            </li>
                            <li>
                                <span>Bereikbaarheid:</span>
                                <ul>
                                    @if($location->distance_line_1 ?? null)
                                        <li>{{ $location->distance_line_1 }}</li>
                                    @endif
                                    @if($location->distance_line_2 ?? null)
                                        <li>{{ $location->distance_line_2 }}</li>
                                    @endif
                                    @if($location->distance_line_3 ?? null)
                                        <li>{{ $location->distance_line_3 }}</li>
                                    @endif
                                </ul>
                            </li>
                        </ul>

                        <div class="small">
                            @include('partials.rich-bard', [
                                'bard' => $location->extra_content
                            ])
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
