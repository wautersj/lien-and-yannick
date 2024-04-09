@extends('layout')

@section('content')
    @include('main.navigation', [
        'nav_overflow' => true
    ])

    @include('partials.header')
    @include('partials.clock')

    <div class="container"><hr class="w-75 mx-auto d-none d-md-block"/></div>

    @include('partials.timeline')

    {{-- @include('partials.card-pictures-grid') --}}

    {{-- <div class="container m-auto py-3">
        <div class="card">
            <div class="card-body">
                <h1>Home</h1>
                <h1>Home</h1>
                <h1>Home</h1>
                <h1>Home</h1>
                <h1>Home</h1>
                <h1>Home</h1>
            </div>
        </div>
    </div> --}}
@endsection
