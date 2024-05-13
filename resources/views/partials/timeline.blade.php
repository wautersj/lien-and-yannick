@php
    $rows = $rows ?? [];
@endphp

<div class="section timeline-section">
    <div class="container">
        @foreach($rows as $row)
            @if( $row->type == 'new_title' )
                <div class="row row-title js-animated-block">
                    <div class="col-12 js-animated-element to-animate animate-from-bottom prepared">
                        <h1>{{ $row->row_title }}</h1>
                    </div>
                </div>

                <div class="row d-none">
                    {{-- Dummy row to fox odd/even sequence --}}
                </div>
            @endif

            @if( $row->type == 'new_item' )
                <div class="row row-item js-animated-block">
                    <div class="col-12 col-lg-5 col-xl-5 col-description">
                        <div class="js-animated-element to-animate animate-from-bottom prepared">
                            @include('partials.rich-bard', [
                                'bard' => $row->description
                            ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-5 col-asset">

                        @php($asset = $row->asset)
                        <div class="asset @if( empty($item["asset"]) ) empty @endif js-animated-element to-animate animate-from-bottom prepared">
                            @if( !empty($asset->id) )
                                <img src="{{ Statamic::tag('glide')->params(['src' => $asset->id, 'width' => 1200, 'height' => 1200, 'format' => 'webp'])->fetch() }}" alt="{{ $asset->alt ?? "" }}">
                            @endif
                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
