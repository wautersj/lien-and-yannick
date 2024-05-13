@extends('layout-empty')

@section('content')
    <div class="container m-md-auto">
        <div class="block my-4 last">
            <div class="card shadow-lg card-save-the-date">
                <div>
                    <div class="card-body">
                        <div class="py-2 p-lg-0">

                            {{-- <img src="/images/ornament.png" alt="Ornament" width="100px"> --}}

                            <h1 class="display-1 m-0">Save the date</h1>
                            <hr class="mt-0"/>
                            <p class="caption m-0">21 / 09 / 2024</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="img-wrapper background-image">
                        <img src="{{ Statamic::tag('glide')->params(['src' => $asset, 'width' => 1200, 'height' => 700, 'format' => 'webp'])->fetch() }}" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
