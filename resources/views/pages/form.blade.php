@extends('layout-empty')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => false
    ])

    <div class="pb-0">
        {!! $form_code !!}
    </div>
@endsection
