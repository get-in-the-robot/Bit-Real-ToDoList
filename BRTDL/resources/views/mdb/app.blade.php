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
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Bit;Real | ToDoList</title>
</head>

<body>
    <div id="app">
        <mdb-navbar color="stylish-color-dark" dark>
            <mdb-navbar-brand tag="a" href="/">
                Bit;Real | ToDoList
            </mdb-navbar-brand>
            <mdb-navbar-toggler>
                <mdb-navbar-nav right>

                    @if (Route::has('login'))
                    @auth
                        <mdb-nav-item href="/NewProject">Přidat projekt</mdb-nav-item>
                        <mdb-dropdown tag="li" class="nav-item">
                            <mdb-dropdown-toggle tag="a" navLink slot="toggle" waves-fixed class="py-2 z-depth-0 w-auto"
                            style="font-size: 0.9rem; text-transform: initial;">{{ Auth::user()->name }} </mdb-dropdown-toggle>
                            <mdb-dropdown-menu>
                              <mdb-dropdown-item><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Odhlásit se') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form></mdb-dropdown-item>
                            </mdb-dropdown-menu>
                          </mdb-dropdown>
                    @else
                        <mdb-nav-item href="{{ route('login') }}">Přihlásit</mdb-nav-item>

                        @if (Route::has('register'))
                            <mdb-nav-item href="{{ route('register') }}">Registrace</mdb-nav-item>
                        @endif
                    @endauth
            @endif
                    
                </mdb-navbar-nav>
            </mdb-navbar-toggler>
        </mdb-navbar>
        <div class="dashboard m-3">
                @yield('content')
            
        </div>
    </div>
</body>

</html>