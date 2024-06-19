<nav class="navbar navbar-expand-lg  {{ $nav_overflow ? 'navbar-dark nav-overflow' : 'bg-white' }}">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{$homepage}}">L&Y</a>

        <button class="navbar-toggler ms-auto" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                @foreach (Statamic::tag('nav:main_navigation')->fetch() as $item)
                    <li class="nav-item">

                        {{-- @unless($loop->last) --}}

                            <a class="nav-link
                                @if($item['is_current']) active @endif
                            "
                            @if(($item['new_tab'] ?? null) && $item['new_tab']->value()) target="_blank" @endif
                            href="{{$item['url']}}">
                                {{$item['title']}}
                            </a>

                        {{-- @else
                            <a href="" class="btn btn-sm btn-primary">
                                {{$item['title']}}
                            </a>
                        @endunless --}}
                    </li>
                @endforeach

                {{-- <li class="nav-item">
                    <a href="" class="btn btn-sm btn-secondary">test</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

<div class="mobile-nav">
    <nav class="navbar navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{$homepage}}">L&Y</a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <i class="ph ph-x"></i> --}}
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    @foreach (Statamic::tag('nav:main_navigation')->fetch() as $item)
                        <li class="nav-item">
                            <a class="nav-link
                                @if($item['is_current']) active @endif
                            "
                            @if(($item['new_tab'] ?? null) && $item['new_tab']->value()) target="_blank" @endif
                            href="{{$item['url']}}">
                                {{$item['title']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </nav>
</div>
