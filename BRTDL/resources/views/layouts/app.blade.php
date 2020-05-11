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
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <span class="navbar-item" href="/">
                Bit;Real | ToDoList
              </span>
          
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item" href="/">
                  <i class="fas fa-home mr-2"></i> Hlavní stránka
                </a>
          
              <a class="navbar-item" href="{{ route('news') }}">
                <i class="fas fa-newspaper mr-2"></i>Novinky
                </a>
          
                
              </div>
          
              <div class="navbar-end">
                <div class="navbar-item">
                    @if (Route::has('login'))
                    @auth
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                        <div id="avatar" class="mr-2" style="background-image: url('{{ Auth::user()->avatar }}');">  </div> 
                            <span> {{ Auth::user()->name }}</span>
                        </a>
                
                        <div class="navbar-dropdown">
                          <a href="/NewProject" class="navbar-item"><i class="fas fa-plus mr-2"></i>Nový projekt</a>
                          <a href="/settings" class="navbar-item"><i class="fas fa-user-cog mr-2"></i>Nastavení</a>
                          <a class="navbar-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Odhlásit se') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                          </a>
                          
                          
                        </div>
                      </div>
                    @else
                        <div class="buttons">
                        <a class="button is-primary"  href="{{ route('register') }}">
                          <strong>Registrace</strong>
                        </a>
                        <a class="button is-light"  href="{{ route('login') }}">
                          Přihlásit
                        </a>
                      </div>
                    @endauth
                    @endif
                  
                </div>
              </div>
            </div>
          </nav>
        
        <div class="dashboard p-3">
                @yield('content')
            
        </div>


        

    </div>

    

    
</body>

</html>