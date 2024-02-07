@php
    $pictures = $card_pictures_grid_assets->value()->get();
    $picture_1 = $pictures[0];
    $picture_2 = $pictures[1];
    $picture_3 = $pictures[2];
    $picture_4 = $pictures[3];
    $picture_5 = $pictures[4];
    $picture_6 = $pictures[5];
@endphp

<div class="card-pictures-grid">
    <div class="row g-2">
        <div class="col col-7">
            <div class="picture-wrapper" style="background: url({{ $picture_1 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 1
            </div>
        </div>
        <div class="col col-5">
            <div class="picture-wrapper" style="background: url({{ $picture_2 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 2
            </div>
        </div>
        <div class="col col-4 d-none d-lg-block">
            <div class="picture-wrapper" style="background: url({{ $picture_3 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 3
            </div>
        </div>
        <div class="col col-12 col-lg-4 ">
            <div class="info-wrapper">
                Info
            </div>
        </div>
        <div class="col col-4 d-none d-lg-block">
            <div class="picture-wrapper" style="background: url({{ $picture_4 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 4
            </div>
        </div>
        <div class="col col-5">
            <div class="picture-wrapper" style="background: url({{ $picture_5 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 5
            </div>
        </div>
        <div class="col col-7">
            <div class="picture-wrapper" style="background: url({{ $picture_6 }}), linear-gradient(60deg, rgb(30, 33, 61) 0%, rgb(76 85 168) 100%);">
                Asset 6
            </div>
        </div>
    </div>
</div>
