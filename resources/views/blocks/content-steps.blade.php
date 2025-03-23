{{--
  Title: App: Content with steps
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
            </div>
        </div>
        <div class="row align-items-center mb-5 mb-lg-6">
            <div class="col-lg-6 content mb-4 mb-lg-0">
                <h2 class="section-title m-0 p-0">{!! get_field('title') !!}</h2>
            </div>
            <div class="col-lg-5 content">
                <h3 class="section-title m-0 p-0">{!! get_field('title_2') !!}</h3>
            </div>
        </div>
        <div class="row mt-5 align-items-lg-stretch h-lg-100">

            @foreach (get_field('boxes') as $item)
                <div class="col-lg-4">
                    <div class="box box-outline mb-4 mb-lg-0 h-lg-100">
                        <div class="d-flex flex-column">
                            <h6>krok</h6>
                            <h2 class="color-secondary telegraf-font m-0">0{{ $loop->iteration }}</h2>
                        </div>
                        <div class="py-5">
                            <h4>{!! $item['title'] !!}</h4>
                            <span class="desc d-inline-block color-gray pt-2">{!! $item['text'] !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
