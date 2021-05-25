<html>
  <head>
    <title>@yield('title')</title>
</head>
<body>
    @include('inc.header')

    @yield('content')

    @include('inc.footer')
</body>
</html>
