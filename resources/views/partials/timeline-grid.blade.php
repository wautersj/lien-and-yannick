@php
    $rows = $rows ?? [];

    $title = null;

    if($rows && $rows->value()[0]->type == "new_title")
    {
        $title = $rows->value()[0]->row_title;
    }
@endphp

<div class="section timeline-grid-section">
    <div class="container">

        {{-- @if($title)
            <div class="js-animated-block">
                <h2 class="js-animated-element to-animate animate-from-bottom prepared">{{ $title }}</h2>
            </div>
        @endif --}}

        <div class="grid-wrapper">
            @foreach($rows as $row)
                @if( $row->type == 'new_item' )
                    <div class="row g-0 js-animated-block">
                        <div class="col col-content col-12 col-md-6 @if($loop->index % 2) order-md-last @endif ">
                            <div class="js-animated-element to-animate animate-from-bottom prepared">
                                @include('partials.rich-bard', [
                                    'bard' => $row->description
                                ])
                            </div>
                        </div>
                        <div class="col col-asset col-12 col-md-6 @if($loop->index % 2) left @else right @endif  ">
                            @php($asset = $row->asset)
                            <div class="asset @if( empty($item["asset"]) ) empty @endif js-animated-element to-animate animate-from-bottom prepared">
                                @if( !empty($asset->id) )
                                    <img src="{{ Statamic::tag('glide')->params(['src' => $asset->id, 'width' => 960, 'height' => 700, 'format' => 'webp'])->fetch() }}" alt="{{ $asset->alt ?? "" }}">
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
