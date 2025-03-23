{{--
  Title: App: Free Content 2C
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}


<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                <h5 class="section-subtitle color-secondary">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title mb-4 mb-lg-6">{!! get_field('title') !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 content">
                {!! get_field('content_1') !!}
            </div>
            <div class="col-lg-5 offset-lg-1 content">
                {!! get_field('content_2') !!}
            </div>
        </div>
    </div>
</section>
