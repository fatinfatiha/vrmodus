<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body id="body">
  @include('includes.menu')

  <main class="site-content" role="main">
    @yield('content')
  </main>

  <footer>
    @include('includes.footer')
  </footer>
</body>
</html>
