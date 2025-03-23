<header class="header">
    <nav class="header__navbar navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="w-100 d-lg-flex flex-lg-row align-items-lg-center justify-content-2xl-between">
                <div class="d-flex flex-row align-items-center justify-content-between">
                    <a class="navbar-brand" href="{!! home_url() !!}">
                        <img src="{!! get_field('brand', 'option') !!}" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <div class="menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </button>
                </div>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center jutify-content-2xl-start flex-lg-row"
                    id="navbarToggler">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu([
                            'theme_location' => 'primary_navigation',
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                            'depth' => 1,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new \App\wp_bootstrap5_navwalker(),
                        ]) !!}
                    @endif

                    <div
                        class="header__buttons p-lg-0 py-lg-0 d-flex d-2xl-flex flex-column flex-lg-row align-items-start align-items-lg-center ms-auto">
                        <div class="d-flex flex-row px-3 py-4 w-100">
                            <a class="pe-5" style="font-size: 1.125rem;"
                                href="mailto:{{ get_field('email', 'option') }}">{{ get_field('email', 'option') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
