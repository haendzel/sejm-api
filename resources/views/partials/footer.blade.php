<footer class="footer b-top border-color-gray2">
    <div class="footer-main position-relative bg-dark color-gray2 py-5 py-lg-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class="mb-4" width="116" height="auto" src="{{ get_field('brand_footer', 'option') }}" />
                    <div class="footer-main__email mt-3">
                        <span class="color-secondary">M:</span> <a class="link-email text-decoration-underline"
                            href="mailto:{{ get_field('email', 'options') }}">{{ get_field('email', 'options') }}</a>
                    </div>
                    <div class="footer-main__phones mt-3">
                        @php $phones= get_field('phone_numbers', 'options') @endphp
                        <span class="color-secondary">K: </span><a
                            href="tel:{{ get_field('phone', 'options') }}">{{ get_field('phone', 'options') }}</a><br />
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <span class="color-white fw-medium d-block mb-3">Zadanie rekrutacyjne</span>
                    @if (has_nav_menu('footer_navigation'))
                        {!! wp_nav_menu([
                            'theme_location' => 'footer_navigation',
                            'menu_class' => 'navbar-nav footer-navbar',
                            'container' => false,
                            'depth' => 1,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new \App\wp_bootstrap5_navwalker(),
                        ]) !!}
                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="footer-meta d-none d-lg-block bg-dark-gray color-gray3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <a class="color-gray3 text-decoration-underline"
                        href="{{ get_field('privacy_policy', 'options') }}">{{ __('Polityka prywatności', 'app') }}</a>
                </div>
                <div class="offset-xl-1 col-xl-3">
                    <a class="color-gray3 text-decoration-underline"
                        href="{{ get_field('www_regulations', 'options') }}">{{ __('Warunki korzystania z serwisu', 'app') }}</a>
                </div>
                <div class="col-xl-3">
                    <a class="text-decoration-underline color-gray3"
                        href="{{ get_field('rodo', 'options') }}">{{ __('RODO', 'app') }}</a>
                </div>
                <div class="col-xl-2">
                    {{ __('Projekt', 'app') }}: <a class="color-gray3 text-decoration-underline"
                        href="">{{ __('handzel.dev', 'app') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-meta d-block d-lg-none bg-dark-gray color-gray3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-start">
                    <a class="d-inline-block mb-2" target="_blank"
                        href="{{ get_field('privacy_policy', 'options') }}">{{ __('Polityka prywatności', 'app') }}</a><br />
                    <a class="d-inline-block mb-2" target="_blank"
                        href="{{ get_field('www_regulations', 'options') }}">{{ __('Warunki korzystania z serwisu', 'app') }}</a><br />
                    <a class="d-inline-block mb-3" target="_blank"
                        href="{{ get_field('rodo', 'options') }}">{{ __('RODO', 'app') }}</a><br />
                    <span class="color-gray3 text-decoration-underline">{{ __('Projekt', 'app') }}:</span> <a
                        class="color-secondary" target="_blank"
                        href="https://handzel.dev">{{ __('handzel.dev', 'app') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
