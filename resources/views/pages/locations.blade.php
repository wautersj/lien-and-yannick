@extends('layout')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => false
    ])

    <div class="section">
        <div class="container">

            <div class="js-animated-block">
                <div class="row justify-content-center mb-5 mb-lg-8">
                    <div class="col col-12 col-lg-8 col-xl-6 text-center">
                        <h1 class="js-animated-element to-animate animate-from-bottom prepared">{{ $title }}</h1>
                        <p class="">
                            <i class="ph-fill ph-star text-secondary d-inline-block js-animated-element to-animate animate-from-bottom prepared"></i>
                            <i class="ph-fill ph-star text-secondary d-inline-block js-animated-element to-animate animate-from-bottom prepared"></i>
                            <i class="ph-fill ph-star text-secondary d-inline-block js-animated-element to-animate animate-from-bottom prepared"></i>
                            <i class="ph-fill ph-star text-secondary d-inline-block js-animated-element to-animate animate-from-bottom prepared"></i>
                            <i class="ph-fill ph-star text-secondary d-inline-block js-animated-element to-animate animate-from-bottom prepared"></i>
                        </p>
                        <p class="text-muted js-animated-element to-animate animate-from-bottom prepared">Je kan in de buurt overlachten als je wil. Hier enkele plaaten die goed en snel bereikbaar zijn voor en na het feest.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center js-animated-block">
                <div class="col col-12">
                    <div class="row g-3 justify-content-center">
                        @foreach ($locations as $location)
                            <div class="col col-12 col-md-6 col-xl-3">
                                <div class="card shadow card-detail-info h-100 js-animated-element to-animate animate-from-bottom prepared">
                                    @php($asset = $location->asset)
                                    @if( !empty($asset->id) )
                                        <div class="card-img-top">
                                            <img src="{{ Statamic::tag('glide')->params(['src' => $asset->id, 'width' => 800, 'height' => 450, 'format' => 'webp'])->fetch() }}" alt="{{ $asset->alt ?? "" }}" class="card-img-top">
                                        </div>
                                    @endif

                                    <div class="card-body p-3 pb-0">
                                        <h3 class="text-center mb-2 d-md-none">{!! $location->title !!}</h3>
                                        <h4 class="text-center mb-2 d-none d-md-block">{!! $location->title !!}</h4>

                                        <div class="row">

                                            @if($location->distance_by_car)
                                                <div class="col col-12">
                                                    <p class="icon-text small text-muted">
                                                        <i class="ph-fill ph-car"></i>
                                                        <span>{{ $location->distance_by_car }}</span>
                                                    </p>
                                                </div>
                                            @endif

                                            @if($location->distance_by_foot)
                                                <div class="col col-12">
                                                    <p class="icon-text small text-muted">
                                                        <i class="ph-fill ph-footprints"></i>
                                                        <span>{{ $location->distance_by_foot }}</span>
                                                    </p>
                                                </div>
                                            @elseif($location->distance_by_bike)
                                                <div class="col col-12">
                                                    <p class="icon-text small text-muted">
                                                        <i class="ph-fill ph-bicycle"></i>
                                                        <span>{{ $location->distance_by_bike }}</span>
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer p-3 pt-1 bg-transparent">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-light no-scale" data-bs-toggle="modal" data-bs-target="#locationModal_{{$loop->index}}">
                                                Details tonen
                                            </button>

                                            <a href="{{$location->link ?? null}}" target="_blank" class="btn btn-light no-scale mt-1">Website openen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="d-none">
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>
                <div class="py-5"></div>


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
                            <h3>{{ strip_tags($location->title) }}</h3>
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

                                        @if($location->distance_by_car)
                                            <li>
                                                <p class="icon-text small text-muted justify-content-start">
                                                    <i class="ph-fill ph-car"></i>
                                                    <span>{{ $location->distance_by_car }}</span>
                                                </p>
                                            </li>
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
    </div>

    @foreach ($locations as $location)


    <div class="modal modal-lg fade" id="locationModal_{{$loop->index}}" tabindex="-1" aria-labelledby="locationModal_{{$loop->index}}_Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-white">
                    <div class="modal-header p-3">
                        <h4 class="modal-title m-0" id="locationModal_{{$loop->index}}_Label">{{strip_tags($location->title)}}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    @php($asset = $location->asset)
                    @if( !empty($asset->id) )
                        <div class="">
                            <img src="{{ Statamic::tag('glide')->params(['src' => $asset->id, 'width' => 1500, 'height' => 600, 'format' => 'webp'])->fetch() }}" alt="{{ $asset->alt ?? "" }}" class="w-100 d-block">
                        </div>
                    @endif

                    <div class="modal-body p-3">

                        <div class="row">
                            @if($location->distance_by_car)
                                <div class="col col-12 col-lg">
                                    <p class="icon-text small text-muted">
                                        <i class="ph-fill ph-car"></i>
                                        <span>{{ $location->distance_by_car }}</span>
                                    </p>
                                </div>
                            @endif

                            @if($location->distance_by_foot)
                                <div class="col col-12 col-lg">
                                    <p class="icon-text small text-muted">
                                        <i class="ph-fill ph-footprints"></i>
                                        <span>{{ $location->distance_by_foot }}</span>
                                    </p>
                                </div>
                            @endif

                            @if($location->distance_by_bike)
                                <div class="col col-12 col-lg">
                                    <p class="icon-text small text-muted">
                                        <i class="ph-fill ph-bicycle"></i>
                                        <span>{{ $location->distance_by_bike }}</span>
                                    </p>
                                </div>
                            @endif
                        </div>



                        <div class="text-muted">
                            @include('partials.rich-bard', [
                                'bard' => $location->extra_content
                            ])
                        </div>
                    </div>

                    <div class="modal-footer px-3">
                        <a href="{{$location->link ?? null}}" target="_blank" class="btn btn-secondary no-scale">Website openen</a>
                    </div>
                </div>
            </div>
    </div>

    @endforeach
@endsection
