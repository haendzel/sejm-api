<section class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="section-subtitle mb-4"><?php _e('Dowiedz się więcej', 'best'); ?></h5>
                <h2 class="section-title mb-4 mb-lg-6"><?php _e('Przeczytaj inne <span>artykuły</span>', 'best'); ?></h2>
            </div>
        </div>
        <div class="row">
            @php

                $news = new WP_Query([
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'suppress_filters' => 0,
                    'post__not_in' => [get_the_ID()],
                ]);

            @endphp

            @while ($news->have_posts())
                @php $news->the_post() @endphp

                <div class="col-lg-4 post-archive mb-5 mb-lg-0">
                    <div class="item__wrapper d-flex flex-column align-items-start justify-content-between">
                        <a href="{{ get_permalink() }}" class="w-100">
                            {{ the_post_thumbnail('large', ['class' => 'item__image']) }}
                        </a>
                        <div class="item__content mb-auto">
                            <h5 class="item__date">{!! get_the_date() !!}</h5>
                            <h3 class="item__title">{!! get_the_title() !!}</h3>
                        </div>
                        <a href="{{ get_permalink() }}" class="btn btn-outline item__link"><?php _e('Czytaj więcej', 'best'); ?><img
                                src="@asset('images/arrow-green.svg')" class="arrow"></a>
                    </div>
                </div>
            @endwhile

            @php wp_reset_query() @endphp
        </div>
    </div>
</section>
