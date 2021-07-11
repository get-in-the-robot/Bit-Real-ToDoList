<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Bit;Real | ToDoList</title>
</head>

<body>
  <div id="app">
    <!-- Navbar  -->

    <mdb-navbar expand="large" dark color="stylish">
      <mdb-navbar-brand href="/">
        Bit;Real | ToDoList
      </mdb-navbar-brand>
      <mdb-navbar-toggler>
        <mdb-navbar-nav>
          <mdb-nav-item href="{{ route('home') }}"><i class="fas fa-home"></i> Hlavní stránka</mdb-nav-item>
          <mdb-nav-item href="{{ route('news') }}"><i class="fas fa-newspaper"></i> Novinky</mdb-nav-item>
          <mdb-nav-item href="{{ route('board') }}"><i class="fas fa-table"></i> Nástěnka</mdb-nav-item>
        </mdb-navbar-nav>
        <mdb-navbar-nav right>
          @if (Route::has('login'))
          @auth
          <mdb-dropdown tag="li" class="nav-item">
            <mdb-dropdown-toggle tag="a" nav-link sr-only slot="toggle" waves-fixed>
              <img src="{{ Auth::user()->avatar }}" class="img-fluid z-depth-1 rounded-circle" style="height: 35px; width: 35px"
      alt="Responsive image">
            </mdb-dropdown-toggle>
            <mdb-dropdown-menu right>
              <mdb-dropdown-item href="/NewProject"><i class="fas fa-plus"></i> Nový projekt</mdb-dropdown-item>
              <mdb-dropdown-item href="/settings"><i class="fas fa-user-cog"></i> Nastavení</mdb-dropdown-item>
              <mdb-dropdown-item href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i> {{ __('Odhlásit se') }}</mdb-dropdown-item>
            </mdb-dropdown-menu>
          </mdb-dropdown>
          @else
          <mdb-nav-item href="{{ route('register') }}"><i class="fas fa-home"></i> Registrace</mdb-nav-item>
          <mdb-nav-item href="{{ route('login') }}"><i class="fas fa-newspaper"></i> Přihlásit</mdb-nav-item>

          @endauth
          @endif
        </mdb-navbar-nav>
      </mdb-navbar-toggler>
    </mdb-navbar>

    <div class="dashboard p-3">
      @yield('content')

    </div>




  </div>




</body>

</html>