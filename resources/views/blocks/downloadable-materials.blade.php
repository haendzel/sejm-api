{{--
  Title: App: Downloadable Materials
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-6">
                <h5 class="section-subtitle">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title mb-0">{!! get_field('title') !!}</h2>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-6 d-flex align-items-end justify-content-lg-end">
                <div class="downloadable-materials__btn-wrapper d-flex">
                    <div
                        class="slider-button mt-0 slider-button--prev downloadable-materials__btn downloadable-materials__btn--prev">
                        <img src="@asset('images/left.svg')" class="icon">
                    </div>
                    <div
                        class="slider-button mt-0 slider-button--next downloadable-materials__btn downloadable-materials__btn--next">
                        <img src="@asset('images/right.svg')" class="icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper downloadable-materials__slider">
                    <div class="swiper-wrapper">
                        @if (have_rows('items'))
                            @while (have_rows('items'))
                                @php the_row() @endphp

                                <div class="swiper-slide download-item-box-gray">
                                    <div class="download-item-box-gray__wrapper">
                                        <div class="box-thumbnail">
                                            <img src="{!! get_sub_field('thumbnail') !!}" class="thumb">
                                        </div>
                                        <h4 class="mb-4">{!! get_sub_field('title') !!}</h4>
                                        <a href="{!! get_sub_field('file')['url'] !!}" download
                                            class="btn btn-outline mt-3 text-uppercase">{!! pathinfo(get_sub_field('file')['url'], PATHINFO_EXTENSION) !!}<img
                                                src="@asset('images/download.svg')" class="arrow ms-3"></a>
                                    </div>
                                </div>
                            @endwhile
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
