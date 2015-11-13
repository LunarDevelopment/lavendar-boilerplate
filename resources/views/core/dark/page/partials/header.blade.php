@yield('header.before')

<div class="top row">

    <div class="logo eight columns">

        @yield('logo.before')

        @include('page.partials.header.logo')

        @yield('logo.after')

    </div>

    <div class="links four columns right">

        @yield('header.links.before')

        @menu('header.links')

        @yield('header.links.after')

    </div>

</div>

    <div class="navbar-fixed">
        <nav class="light-blue darken-1" role="navigation">
            <div class="nav-wrapper">
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">

                    @yield('top.navigation.before')

                    @menu('top.navigation')

                    @yield('top.navigation.after')

                </ul>
                <ul class="side-nav" id="nav-mobile">

                    @yield('top.navigation.before')

                    @menu('top.navigation')

                    @yield('top.navigation.after')

                </ul>
            </div>
        </nav>
    </div>

<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    })
</script>
@yield('header.after')