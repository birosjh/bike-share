<nav class="navbar">
    <div class="navbar-brand">
        <div class="navbar-item">
            <h1 class="title">Jitenshare</h1>
        </div>
        <div v-on:click="toggleNav" class="navbar-burger burger" data-target="main-nav">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="main-nav" class="navbar-menu" :class="{ 'is-active': nav }">
        <div class="navbar-end">
            <div class="navbar-item">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="navbar-dropdown is-right">
                                <a class="navbar-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
