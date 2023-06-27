{{--<style>--}}
{{--    a{--}}
{{--        text-decoration: none;--}}
{{--        color: #0b0b0b;--}}
{{--        /*font-weight: bold;*/--}}
{{--    }--}}
{{--</style>--}}
<nav class="navbar navbar-expand-lg mt-0"
     style="/*position:sticky;*/ width:100%; background-color: #fae7bf; margin-top: 0px">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/#" class="clearfix ">
            <img src="{{asset('images/Tabira_Gate_Logo.png')}}" class="logo-img " style="height: 42px;width: 43px" alt="MYG Logo">TABIRA GATE
            {{--
                                                <span class="bold">TABIRA GATE</span>
            --}}
        </a>

    </div>
    <div class="collapse navbar-collapse mr-20 pr-15 pl-10" id="navbarTogglerDemo03" style="padding-left: 20px;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if(auth()->user())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">
                        Dashboard</a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/#">
                    HOME</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    SERVISES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('Tabira_Academy')}}">Tabira Academy</a></li>
                    <li><a class="dropdown-item" href="{{route('Website_and_IT_Development_Services')}}">Website and IT Development Services</a></li>
                    <li><a class="dropdown-item" href="{{route('Business_Development')}}">Business Development</a></li>
                    <li><a class="dropdown-item" href="{{route('Local_and_International_NGO_Capacity_Building_and_Development')}}">
                            Local and International NGO Capacity Building<br> and Development</a></li>
                    <li><a class="dropdown-item" href="{{route('English_Language_Courses')}}">English Language Courses</a></li>
                    <li><a class="dropdown-item" href="{{route('Yahoo_and_Meditation')}}">Yahoo and Meditation</a></li>
                    <li><a class="dropdown-item" href="{{route('Human_Resource_Management')}}">Human Resource Management</a></li>

                </ul>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#our_mission">MISSION</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/#about_us">ABOUT</a>
            </li><li class="nav-item">
                <a class="nav-link" href="/#our_vision">VISION</a>
            </li><li class="nav-item">
                <a class="nav-link" href="/#our_team">TEAN</a>

            <li>
                <a class="nav-link d-flex" href="/#contact_us">CONTACT</a>
            </li>

{{--                @guest--}}
{{--                    @if (/*Route::has('login')*/)--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}

{{--                    @if (/*Route::has('register')*/ auth()->user())--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                @if(auth()->user())--}}
{{--                <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                        </a>--}}

{{--                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                            {{ __('Logout') }}--}}
{{--                        </a>--}}

{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                @endif--}}
                {{--                @endguest--}}
{{--                @auth--}}
{{--                @if (Route::has('register'))--}}
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">NewAccount</a>
                    </li>
{{--                @endif--}}
{{--                @endauth--}}
                @endauth
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif


                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
        </ul>
    </div>
</nav>
