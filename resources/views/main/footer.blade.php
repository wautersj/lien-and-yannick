<footer class="js-animated-block">
    @if($layout->footer_image)
        <div class="background-image js-animated-element to-animate animate-zoom-out animate-slow prepared">
            <img src="{{ Statamic::tag('glide')->params(['src' => $layout->footer_image, 'width' => 2200, 'height' => 1100, 'format' => 'webp'])->fetch() }}" alt="footer background image">
        </div>
    @endif

    <div class="top-content">
        <div class="container">
            <h1 class="js-animated-element to-animate animate-from-bottom prepared">Jij bent uitgenodigd!</h1>
            <p class="lead js-animated-element to-animate animate-from-bottom prepared">We vieren dit graag met jouw er bij. Laat je iets weten?</p>
            <a href="/rsvp"  class="btn btn-secondary btn-lg mt-3 js-animated-element to-animate animate-from-bottom prepared">Aanwezigheid bevestigen</a>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container">
            <p><a href="https://wautersj.be" target="_blank">Wautersj.be</a> &copy; {{ date("Y") }}</p>
        </div>
    </div>
</footer>
