{{--
  Title: App: Hero
  Category: app
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }} bg-light-gray" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container-fluid p-0 position-relative">
        <div class="container">

            <div class="row align-items-center overflow-unset" style="z-index: 100;">
                <div class="col-lg-6 col-4xl-7 d-flex flex-column align-items-start justify-content-end"
                    style="z-index: 100;">
                    <p class="hero__subtitle">{!! get_field('subtitle') !!}</p>
                    <h1 class="hero__title mb-3">{!! get_field('title') !!}</h1>
                    <img class="d-block d-lg-none" src="{{ get_field('image') }}" alt="hero">
                    <p class="hero__text w-85">{!! get_field('desc') !!}</p>
                    <a href="{!! get_field('link')['url'] !!}" class="btn btn-secondary mt-2">{!! get_field('link')['title'] !!}</a>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-4xl-none mt-6 mt-lg-0">
                    <img src="{{ get_field('image') }}" alt="hero">
                </div>

            </div>
        </div>
        <div class="row d-none d-4xl-block align-items-center overflow-unset absolute-row w-100 position-absolute"
            style="z-index: 1;">
            <div class="offset-2xl-6 col-2xl-6 mt-6 mt-lg-0">
                <img src="{{ get_field('image') }}" alt="hero">
            </div>
        </div>
    </div>
</section>
