{{--
  Title: App: About
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col mb-3">
                <h5 class="section-subtitle">{!! get_field('subtitle') !!}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="section-title mb-4 mb-lg-6">{!! get_field('title') !!}</h2>
                <img src="{!! get_field('photo') !!}" class="about__image">
            </div>
            <div class="col-lg-6 offset-lg-1 about__content">
                {!! get_field('text') !!}

                <a href="{!! get_field('link')['url'] !!}" class="btn btn-primary">{!! get_field('link')['title'] !!}</a>
                <div class="about__box">
                    <h5 class="mb-4">{!! get_field('box_title') !!}</h5>
                    <h4>{!! get_field('box_text') !!}</h4>
                </div>
            </div>
        </div>
    </div>
</section>
