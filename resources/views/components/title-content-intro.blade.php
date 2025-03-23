@component('components.small-uppercase-text', [
    'color' => 'secondary',
    'bottom' => 'mb-2 mb-xl-3',
    'type' => 'small-text__intro',
])
    {!! $small !!}
@endcomponent
@if ($title && !$desc)
    @component('components.intro-title', ['color' => $title_color, 'class' => 'pb-7'])
        {!! $title !!}
    @endcomponent
@endif
@if ($title && $desc)
    @component('components.intro-title', ['color' => $title_color])
        {!! $title !!}
    @endcomponent
@endif
@if ($desc)
    @component('components.intro-desc', ['color' => $desc_color])
        {!! $desc !!}
    @endcomponent
@endif
