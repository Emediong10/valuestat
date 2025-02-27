@aware(['page'])
<header id="header" class="transparent-header full-header dark sticky" data-responsive-class="not-dark"  style="padding: 5px 0; background-color:rgb(61,128,228);">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                {{-- This is logo --}}
                <div id="logo" class="border-end-0">
                    <a href="" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt=""></a>
                    {{-- <a href="" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt=""></a> --}}
                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu with-arrows primary-menu-init">

                    <x-filament-menu-builder::menu slug="main-menu" view="filament-menu-builder::components.bootstrap5.menu"/>

                </nav>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
