{{--
  Title: App: Downloads Boxes
  Category: app
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="bigger mb-5">{!! get_field('title') !!}</h3>
            </div>
        </div>
        <div class="row">
            @if (have_rows('items'))
                @while (have_rows('items'))
                    @php the_row() @endphp

                    <div class="col-lg-4 download-item-box-gray">
                        <div
                            class="download-item-box-gray__wrapper d-flex flex-column align-items-start justify-content-between">
                            <h4 class="mb-4">{!! get_sub_field('title') !!}</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="{!! get_sub_field('online') !!}" target="_blank"
                                    class="btn btn-primary m-2 ms-0"><?php _e('Wyświetl', 'best'); ?></a>
                                <a href="{!! get_sub_field('file') !!}" download
                                    class="btn btn-outline m-2 ms-0"><?php _e('Pobierz', 'best'); ?><img src="@asset('images/download.svg')"
                                        class="arrow ms-3"></a>
                            </div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
