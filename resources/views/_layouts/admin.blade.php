<!DOCTYPE html>
<html lang="en">

<head>
    @include('_partials.metadata')
    @include('_partials.css')
    @yield('styles')

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
        <!-- Navbar-->
        @include('_partials.top-nav')
        <!-- Side-Nav-->
        @include('_partials.left-nav')
        
        <!-- Sidebar chat start -->
        @include('_partials.right-nav')
        
        <!-- Sidebar chat end-->
        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <!-- Main content starts -->
            <div class="container-fluid">

                @yield('content')
                
            </div>
            <!-- Main content ends -->
            <!-- Container-fluid ends -->
            <div class="fixed-button">
                <a href="https://themeforest.net/item/able-pro-responsive-bootstrap-4-admin-template/19300403?ref=phoenixcoded" class="btn btn-md btn-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                </a>
            </div>
        </div>
    </div>

    @include('_partials.javascript')

    @yield('scripts')

    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.min.js"></script>
    <script type="text/javascript" src="assets/pages/elements.js"></script>
    <script src="assets/js/menu.min.js"></script>

    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            }else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>