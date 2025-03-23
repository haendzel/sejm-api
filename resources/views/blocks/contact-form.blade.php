{{--
  Title: App: Contact Form
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }} bg-dark py-6 py-lg-7 mt-0" data-block="{{ $block['id'] }}"
    id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5">
                <h5 class="section-subtitle color-secondary mb-3">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title color-white mb-4 mb-lg-5">{!! get_field('title') !!}</h2>
                <div class="pb-5">
                    <h4 class="color-white" style="font-weight: 300 !important;">{!! get_field('desc') !!}</h5>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-6">
                <div class="contact-form__wrapper">
                    {!! do_shortcode(get_field('form')) !!}
                </div>
            </div>
        </div>
    </div>
</section>
