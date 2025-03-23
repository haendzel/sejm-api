<section class="section section-intro section-intro-regulations bg-secondary position-relative d-none d-xl-block">
    <div class="container">
        <div class="row mt-6">
            <div class="col-xl-7">
                @component('components.title-content-intro', [
                    'small' => get_the_title(),
                    'title' => get_the_title(),
                    'desc' => null,
                    'title_color' => 'white',
                    'desc_color' => 'white',
                ])
                @endcomponent
            </div>
        </div>
    </div>
</section>

<section class="section section-intro section-intro-regulations position-relative d-block d-xl-none">
    <img class="intro-asset" src='@asset('images/mobile-linie-banner.png')' />
    <div class="container">
        <div class="row mt-6">
            <div class="col-xl-7">
                @component('components.title-content-intro', [
                    'small' => get_the_title(),
                    'title' => get_the_title(),
                    'desc' => null,
                    'title_color' => 'white',
                    'desc_color' => 'white',
                ])
                @endcomponent
            </div>
        </div>
    </div>
</section>
