{{--
  Title: App: Contact Section
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="section-subtitle mb-4">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title mb-4 mb-lg-6">{!! get_field('title') !!}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <img src="{!! get_field('image') !!}" class="contact-section__image">
            </div>
            <div class="col-lg-4 pe-lg-6 mb-5 mb-lg-0">
                <h3 class="contact-section__subtitle">{!! get_field('localization_1') !!}</h3>
                @if (have_rows('items_1'))
                    @while (have_rows('items_1'))
                        @php the_row() @endphp

                        <div class="contact-section__item">
                            <h5 class="item__title">{!! get_sub_field('title') !!}</h5>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{!! get_sub_field('icon') !!}" class="item__icon">
                                </div>
                                <div class="col-10">
                                    <p class="item__value">{!! get_sub_field('value') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endwhile
                @endif
            </div>
            <div class="col-lg-4 pe-lg-6">
                <h3 class="contact-section__subtitle">{!! get_field('localization_2') !!}</h3>
                @if (have_rows('items_2'))
                    @while (have_rows('items_2'))
                        @php the_row() @endphp

                        <div class="contact-section__item">
                            <h5 class="item__title">{!! get_sub_field('title') !!}</h5>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{!! get_sub_field('icon') !!}" class="item__icon">
                                </div>
                                <div class="col-10">
                                    <p class="item__value">{!! get_sub_field('value') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</section>
