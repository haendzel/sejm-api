{{--
  Title: Best: About Accordions
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <h5 class="section-subtitle">{!! get_field('subtitle') !!}</h5>
        <h2 class="section-title">{!! get_field('title') !!}</h2>
        <div class="about-accordions__content pe-2xl-6">
          {!! get_field('text') !!}
          <a href="{!! get_field('link')['url'] !!}" class="btn btn-primary">{!! get_field('link')['title'] !!}</a>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1">
        <div class="col-lg-12 accordions">
          <div class="accordion accordion-flush" id="accordionFlushFAQ">
            @php
                $count = 1
            @endphp
  
            @if( have_rows('accordions') )
            @while( have_rows('accordions') ) @php the_row() @endphp
  
              <div class="accordion-item" data-sal="fade">
                <h3 class="accordion-header" id="faq-flush-heading{{ get_row_index() }}">
                  <button class="accordion-button @if ( !get_sub_field('active') ) collapsed  @endif" type="button" data-bs-toggle="collapse" data-bs-target="#faq-flush-collapse{{ get_row_index() }}" aria-expanded="false" aria-controls="faq-flush-collapse{{ get_row_index() }}">
                    <div class="row w-100">
                      <div class="col-2 d-flex align-items-center">
                        <span class="count">{{ sprintf('%02d', get_row_index()) }}</span>
                      </div>
                      <div class="col-9">
                        <span class="text">{!! get_sub_field('question') !!}</span>
                      </div>
                    </div>
                  </button>
                </h3>
                <div id="faq-flush-collapse{{ get_row_index() }}" class="accordion-collapse collapse @if(get_sub_field('active')) show @endif" aria-labelledby="faq-flush-heading{{ get_row_index() }}" data-bs-parent="#accordionFlushFAQ">
                  <div class="row">
                    <div class="col-lg-7 offset-lg-2 ps-lg-2">
                      <div class="accordion-body">
                        <p class="mb-5">{!! get_sub_field('answer') !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              @php
                  $count++
              @endphp
  
            @endwhile
            @endif
  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>