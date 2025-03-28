<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class('app') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap py-6 py-lg-7" role="document">
        <div class="content">
            <main class="main container">
                @yield('content')
            </main>
        </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
</body>

</html>
