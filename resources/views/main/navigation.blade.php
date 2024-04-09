
{{-- <div class="navigation">
    <div class="container">

    </div>
</div> --}}

@foreach (Statamic::tag('nav:main_navigation')->fetch() as $item)

{{-- {{dd($item['title'])}} --}}

@endforeach

<nav class="navbar navbar-expand-lg  {{ $nav_overflow ? 'navbar-dark nav-overflow' : '' }}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">L&Y</a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">


            @foreach (Statamic::tag('nav:main_navigation')->fetch() as $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{$item['url']}}">{{$item['title']}}</a>
                </li>
            @endforeach

          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
