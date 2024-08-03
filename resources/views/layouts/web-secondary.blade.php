@include('layouts.partials.head')

@include('layouts.partials.site-header')

@include('layouts.partials.site-side-links')

@include('layouts.partials.header-title-banner')
@include('layouts.partials.breadcrumbs')

@yield('page-content')

@include('layouts.partials.site-footer')
@include('layouts.partials.modals')
@include('layouts.partials.footer')