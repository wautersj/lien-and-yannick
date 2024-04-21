@extends('layout')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => false
    ])

    <div class="section">
        <div class="container js-animated-block">

            <div class="row justify-content-center mb-5 mb-lg-8">
                <div class="col col-12 col-lg-8 col-xl-6 text-center">
                    <h1 class="js-animated-element to-animate animate-from-bottom prepared">{{ $title }}</h1>
                    <p class="text-muted js-animated-element to-animate animate-from-bottom prepared">Enkele zaken die we jullie graag willen toelichten!</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col col-12 col-lg-9 col-xl-8">
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                        @foreach ($items as $item)
                            <div class="accordion-item js-animated-element to-animate animate-from-bottom prepared">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-faq-{{$loop->index}}" aria-expanded="false" aria-controls="flush-faq-{{$loop->index}}">
                                    {{ $item->title ?? null }}
                                    </button>
                                </div>
                                <div id="flush-faq-{{$loop->index}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @include('partials.rich-bard', [
                                            'bard' => $item->content ?? null
                                        ])
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
