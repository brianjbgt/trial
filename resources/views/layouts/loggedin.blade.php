<div class="container">
    <div class="row">
        <div id="exTab3" class="container"> 
            <ul  class="nav nav-pills">
                <li class="@yield('activeHome')">
                {{-- add  data-toggle="tab" to links to make them not reload but still change content --}}
                    <a  href="@yield('url_home')">Overview</a>
                </li>
                <li class="@yield('activeHeroes')">
                    <a href="@yield('url_heroes')">Heroes</a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane @yield('activeHome')" id="1b">
                    <div class="column lg-6 lg-push-6">
                        @if(Request::segment(1) == "home")
                            @include('layouts.homecontent')
                        @endif
                    </div>
                </div>
                <div class="tab-pane @yield('activeHeroes')" id="2b">
                  {{-- content here if tab 2 doesn't redirect to a different page --}}
                    <div class="column lg-6 lg-push-6">
                        @if(Request::segment(1) == "heroes")
                            @include('layouts.herocontent')                           
                        @endif
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
<link href="{{ asset('css/loggedin.css') }}" rel="stylesheet">
