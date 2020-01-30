<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container">
  <title>@yield('title')</title>

  <!--Navbar links -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="/">Home </a>
    <a class="nav-item nav-link" href="/about">About</a>
    <a class="nav-item nav-link" href="/contact">Contact</a>
    <a class="nav-item nav-link" href="/authors/create">Create author</a>
    <a class="nav-item nav-link" href="/authors">All authors</a>
  </nav>

  @yield('content')

</div>
