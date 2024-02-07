<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<footer>

    <div class="top-content">
        <div class="container">
            <h2>Hopelijk kom jij ook?</h2>
            <p class="lead">Laat het ons weten door ons RSVP formulier in te vullen. Tot dan!</p>
            <a href="#" class="btn btn-secondary mt-3">Aanwezigheid bevestigen</a>
        </div>
    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255,255,255,1)" />
        </g>
        </svg>
    </div>
    <!--Waves end-->

    <div class="bottom-content">
        <div class="container">
            <p><a href="https://wautersj.be" target="_blank">Wautersj.be</a> &copy; {{ date("Y") }}</p>
        </div>
    </div>

    @if($layout->footer_image)
        <div class="backgound-image" style="background: url({{ Statamic::tag('glide')->params(['src' => $layout->footer_image, 'width' => 1200, 'height' => 900, 'format' => 'webp'])->fetch() }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);"></div>
    @endif
</footer>