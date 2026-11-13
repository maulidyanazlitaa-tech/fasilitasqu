@php
    $pageCode = trim($__env->yieldContent('page-code'));

    $laravelDashboardPages = [
        'PEL-01',
        'ADM-01',
        'PTG-01',
        'KRD-01',
    ];
@endphp
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#524646">
    <meta name="fq-page" content="{{ $pageCode }}">
    <title>@yield('title', 'FasilitasQu')</title>
    <link rel="icon" href="{{ asset('fasilitasqu/assets/favicon.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('fasilitasqu/assets/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fasilitasqu/assets/prototype.css') }}">

    @if (!in_array($pageCode, $laravelDashboardPages, true))
      <script defer src="{{ asset('fasilitasqu/assets/app.js') }}"></script>
    @endif
  </head>
  <body data-page="{{ $pageCode }}">
    @yield('content')
  </body>
</html>
