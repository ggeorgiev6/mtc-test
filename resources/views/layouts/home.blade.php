{{-- Head partial --}}
@include('partials.global.head')

{{-- Navigation partial --}}
@include('partials.global.nav')

{{-- Placeholders for the page slider & content --}}
@yield('slider')
@yield('content')

{{-- Footer partial --}}
@include('partials.global.foot')