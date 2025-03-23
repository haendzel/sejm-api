{{--
  Title: App: FAQ
  Category: app
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="section-subtitle">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title">{!! get_field('title') !!}</h2>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="col-lg-12 accordions">
                    <div class="accordion accordion-flush" id="accordionFlushFAQ">
                        @php
                            $count = 1;
                        @endphp

                        @if (have_rows('accordions'))
                            @while (have_rows('accordions'))
                                @php the_row() @endphp

                                <div class="accordion-item" data-sal="fade">
                                    <h3 class="accordion-header" id="faq-flush-heading{{ get_row_index() }}">
                                        <button
                                            class="accordion-button @if (!get_sub_field('active')) collapsed @endif"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-flush-collapse{{ get_row_index() }}"
                                            aria-expanded="false"
                                            aria-controls="faq-flush-collapse{{ get_row_index() }}">
                                            <div class="row g-0 w-100">
                                                <div class="col-1 d-flex align-items-start pt-1">
                                                    <span class="count">{{ sprintf('%02d', get_row_index()) }}</span>
                                                </div>
                                                <div class="col-10 ps-lg-4">
                                                    <span class="text">{!! get_sub_field('question') !!}</span>
                                                </div>
                                            </div>
                                        </button>
                                    </h3>
                                    <div id="faq-flush-collapse{{ get_row_index() }}"
                                        class="accordion-collapse collapse @if (get_sub_field('active')) show @endif"
                                        aria-labelledby="faq-flush-heading{{ get_row_index() }}"
                                        data-bs-parent="#accordionFlushFAQ">
                                        <div class="row g-0">
                                            <div class="col-lg-8 offset-lg-1 ps-lg-3">
                                                <div class="accordion-body">
                                                    <p class="mb-5">{!! get_sub_field('answer') !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $count++;
                                @endphp
                            @endwhile
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
