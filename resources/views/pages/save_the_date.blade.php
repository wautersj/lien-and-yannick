@extends('layout')

@section('content')
    <div class="container m-auto">
        <div class="block mt-4 last">
            <div class="card shadow-lg card-save-the-date">
                <div class="card-body">
                    <div class="py-5 p-lg-0">

                        {{-- <img src="/images/ornament.png" alt="Ornament" width="100px"> --}}

                        <h1 class="font-great-vibes display-1 m-0">Save the date</h1>
                        <hr class="mt-0"/>
                        <p class="fw-normal text-muted m-0">21 / 09 / 2024</p>
                    </div>
                </div>

                <div class="img-wrapper">
                    <img src="{{ Statamic::tag('glide')->params(['src' => $asset, 'width' => 1200, 'format' => 'webp'])->fetch() }}" alt="Thumb">
                </div>
            </div>
        </div>
    </div>
@endsection
