@php

@endphp

<header class="js-animated-block">

    @if($header_image ?? null)
        <div class="background-image js-animated-element to-animate animate-zoom-out animate-slow prepared">
            <img src="{{ Statamic::tag('glide')->params(['src' => $header_image, 'width' => 2200, 'height' => 1100, 'format' => 'webp'])->fetch() }}" alt="header background image">
        </div>
    @endif

    <div class="container">

        {{-- <img src="/images/wedding-ring.svg" alt=""> --}}

        <svg class="rings-svg text-secondary js-animated-element to-animate animate-rings prepared" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 25.626 25.626" xml:space="preserve">
        <g>
            <path style="fill:currentColor;" d="M16.812,4.001c-0.997,0-1.952,0.174-2.846,0.479C15.032,5.142,15.96,6,16.703,7.007
                c0.037-0.002,0.072-0.006,0.109-0.006c3.205,0,5.813,2.607,5.813,5.813s-2.608,5.812-5.813,5.812S11,16.018,11,12.813
                c0-1.295,0.431-2.487,1.149-3.455c-0.732-0.707-1.689-1.167-2.75-1.298C8.517,9.432,8,11.061,8,12.813
                c0,4.867,3.945,8.813,8.813,8.813s8.813-3.945,8.813-8.813S21.679,4.001,16.812,4.001z"/>
            <path style="fill:currentColor;" d="M8.812,21.626c0.997,0,1.952-0.174,2.846-0.479c-1.066-0.662-1.994-1.52-2.737-2.527
                c-0.037,0.001-0.072,0.006-0.109,0.006c-3.205,0-5.813-2.607-5.813-5.813s2.608-5.812,5.813-5.812s5.813,2.607,5.813,5.812
                c0,1.295-0.431,2.487-1.149,3.455c0.732,0.707,1.689,1.167,2.75,1.298c0.882-1.372,1.399-3.001,1.399-4.753
                C17.625,7.946,13.68,4,8.812,4S0,7.946,0,12.813S3.945,21.626,8.812,21.626z"/>
        </g>
        </svg>

        <p class="caption js-animated-element to-animate animate-from-bottom prepared">Lien & Yannick</p>
        <h1 class="js-animated-element to-animate animate-from-bottom prepared">Wij gaan trouwen</h1>

        <i class="down-icon ph-bold ph-arrow-down text-secondary js-animated-element to-animate animate-from-bottom animate-delay-3 prepared"></i>
    </div>
</header>
