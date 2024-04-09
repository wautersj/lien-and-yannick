<div class="bard-content">
    @foreach(($bard ?? []) as $data)

        @if( $data->type == "caption" )
            <p class="caption">{{ $data->caption }}</p>
        @endif

        @if( $data->type == "text" )
            {!! $data->text !!}
        @endif

    @endforeach
</div>
