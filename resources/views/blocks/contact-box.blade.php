{{--
  Title: App: Contact Box
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}


<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}"
    style="background: linear-gradient(0deg, rgba(30,31,33,1) 0%, rgba(30,31,33,1) 50%, rgba(255,255,255,1) 50%);">
    <div class="container">
        <div class="row g-0">
            <div class="col">
                <div class="box box-secondary">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box-text w-lg-75 mb-5 mb-lg-0">
                                {!! get_field('text') !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-row align-items-start">
                                <img src="@asset('images/white-phone.svg')" alt="icon" class="me-3 mt-2" />
                                <div class="d-flex flex-column box-detail mb-3 mb-lg-0">
                                    <span class="pb-0 mb-0">Telefon:</span>
                                    <a style="color: white !important;"
                                        href="tel:{!! get_field('phone', 'options') !!}">{!! get_field('phone', 'options') !!}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex flex-row align-items-start">
                                <img src="@asset('images/white-mail.svg')" alt="icon" class="me-3 mt-2" />
                                <div class="d-flex flex-column box-detail">
                                    <span class="pb-0 mb-0">Mail:</span>
                                    <a style="color: white !important;"
                                        href="mailto:{!! get_field('email', 'options') !!}">{!! get_field('email', 'options') !!}</a>
                                </div>
                            </div>
                            <a class="btn btn-light color-dark mt-5 mt-lg-4" href="#form">{!! __('Formularz kontaktowy', 'app') !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
