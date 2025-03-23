<article @php post_class('best-post') @endphp>
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h5 class="post-header__subtitle"><?php _e('Aktualności', 'best') ?></h5>
        <h2 class="post-header__title">{!! get_the_title() !!}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 mb-5 mb-lg-0">
        {{ the_post_thumbnail('full', array('class' => 'post-header__image')) }}
      </div>
      <div class="col-lg-3 d-flex align-items-end">
        <div class="post-header__share pe-lg-5">
          <h5><?php _e('Podziel się wpisem', 'best') ?></h5>
          <div class="share__socials">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ get_permalink() }}" class="item" target="_blank"><img src="@asset('images/fb.svg')" class="icon"></a>
            <a href="https://twitter.com/intent/tweet?url={{ get_permalink() }}&text={{ get_the_title() }}" class="item" target="_blank"><img src="@asset('images/tt.svg')" class="icon"></a>
            <a href="https://www.linkedin.com/shareArticle?url={{ get_permalink() }}&title={{ get_the_title() }}&summary=&source=" class="item" target="_blank"><img src="@asset('images/in.svg')" class="icon"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9">
        <div class="entry-content">
          @php the_content() @endphp
        </div>
        <div class="entry-cta">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column align-items-start justify-content-center pe-lg-5 mb-5 mb-lg-0">
              <div class="cta__content">
                <h4 class="cta__text">{!! get_field('cta_text', 'option') !!}</h4>
                <h3 class="cta__title color-primary">{!! get_field('cta_title', 'option') !!}</h3>
              </div>
              <a href="{!! get_field('cta_link', 'option')['url'] !!}" class="btn btn-primary mt-5">{!! get_field('cta_link', 'option')['title'] !!}</a>
            </div>
            <div class="col-lg-6">
              <img src="@asset('images/cta.png')" class="cta__image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
