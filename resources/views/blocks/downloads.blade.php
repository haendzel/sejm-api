{{--
  Title: App: Downloads
  Category: app
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="section-subtitle mb-4">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title mb-5">{!! get_field('title') !!}</h2>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @if (have_rows('items'))
                        @while (have_rows('items'))
                            @php the_row() @endphp

                            <div class="col-lg-6 download-item-box">
                                <div class="download-item-box__wrapper">
                                    <h4 class="mb-4">{!! get_sub_field('title') !!}</h4>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <a href="{!! get_sub_field('docx') !!}" download
                                            class="btn btn-outline m-2 ms-0">DOCX<img src="@asset('images/download.svg')"
                                                class="arrow"></a>
                                        <a href="{!! get_sub_field('pdf') !!}" download class="btn btn-outline m-2">PDF<img
                                                src="@asset('images/download.svg')" class="arrow"></a>
                                        <a href="{!! get_sub_field('online') !!}" target="_blank"
                                            class="btn btn-primary m-2"><?php _e('Wypełnij online', 'best'); ?></a>
                                    </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @if (have_rows('items_2'))
                @while (have_rows('items_2'))
                    @php the_row() @endphp

                    <div class="col-lg-4 download-item-box">
                        <div class="download-item-box__wrapper">
                            <h4 class="mb-4">{!! get_sub_field('title') !!}</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="{!! get_sub_field('docx') !!}" download class="btn btn-outline m-2 ms-0">DOCX<img
                                        src="@asset('images/download.svg')" class="arrow"></a>
                                <a href="{!! get_sub_field('pdf') !!}" download class="btn btn-outline m-2">PDF<img
                                        src="@asset('images/download.svg')" class="arrow"></a>
                                <a href="{!! get_sub_field('online') !!}" target="_blank"
                                    class="btn btn-primary m-2"><?php _e('Wypełnij online', 'best'); ?></a>
                            </div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
