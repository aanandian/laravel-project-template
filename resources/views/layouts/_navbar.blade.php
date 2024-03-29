<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ route('/') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item{{ Route::currentRouteName() == 'login' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">@lang('menus.login')</a>
                    </li>

                    <li class="nav-item{{ Route::currentRouteName() == 'register' ? ' active' : '' }}">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">@lang('menus.register')</a>
                        @endif
                    </li>
                @else
                    @if (auth()->user()->hasRole('Admin'))
                        <li class="nav-item{{ starts_with(Route::currentRouteName(), 'users.') ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">@lang('menus.users.index')</a>
                        </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @lang('menus.profile') <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">
                                {{ auth()->user()->name }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();var check=confirm(&quot;@lang('messages.confirm-logout')&quot;);if(check){document.getElementById('logout-form').submit();}">
                                @lang('menus.logout')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
