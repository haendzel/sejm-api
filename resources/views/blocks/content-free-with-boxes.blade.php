{{--
  Title: App: Free Content 2C wit boxes
  Category: best
  Mode: edit
  PostTypes: page
  SupportsAnchor: true
--}}

@php
// Get the current page number
$paged = (get_query_var('page')) ? get_query_var('page') : 1;

$args = array(
    'post_type'      => 'posel',
    'posts_per_page' => 21,
    'meta_key'       => 'lastName',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'paged'          => $paged, // Pass the current page number
);

$query = new WP_Query($args);
@endphp

<section class="{{ $block['classes'] }}" data-block="{{ $block['id'] }}" id="{{ $block['anchor'] }}">
    <div class="container">
        <div class="row">
            <div class="col mb-3 text-center">
                <h5 class="section-subtitle color-secondary">{!! get_field('subtitle') !!}</h5>
                <h2 class="section-title mb-4 mb-lg-6">{!! get_field('title') !!}</h2>
            </div>
        </div>

        <div class="row g-3 mt-0 mt-lg-5 align-items-lg-stretch d-lg-fle h-lg-100">

@if($query->have_posts())
    @while($query->have_posts())
        @php $query->the_post(); @endphp

        @php
            $post_id = get_the_ID();
            $id = get_field('id', $post_id);
            $active = get_field('active', $post_id);
            $firstLastName = get_the_title();
            $club = get_field('club', $post_id);
        @endphp



        <div class="col-12 col-md-4 min-h-100">
            <div class="box box-outline bg-white @if(!$active)opacity-05 @endif h-100 d-flex flex-column align-items-lg-start justify-content-lg-between" data-aos="fade-in">
                <img class="envoy-image bg-gray mt-0" style="background-color: #F7F7F7 !important;" src="https://api.sejm.gov.pl/sejm/term10/MP/{{ $id }}/photo" width="auto" height='auto' alt="{{ $firstLastName }}" title="{{ $firstLastName }}" />
                <h3 class="fw-semibold">{{ $firstLastName }}</h3>
                <h4 class="fw-medium">{{ $club }}</h4>
                <a class="btn btn-secondary mt-4" href="{{ get_permalink() }}">{{ __('Zobacz więcej', 'app') }}</a>
            </div>
        </div>



    @endwhile
    @php wp_reset_postdata(); @endphp

    {{-- Pagination --}}
    <div class="col-12 mt-5">
        <nav class="pagination-wrapper text-center">
            @php
                echo paginate_links(array(
                    'total'     => $query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => __('« Poprzednia', 'app'),
                    'next_text' => __('Następna »', 'app'),
                    'mid_size'  => 2,
                ));
            @endphp
        </nav>
    </div>

@else
    <div class="col-12">
        <p>{{ __('Brak wyników.', 'app') }}</p>
    </div>
@endif

        </div>
    </div>
</section>