<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>EduPredict</title>
    <!-- Favicon icon -->
    <link rel="icon" id="dynamic-favicon" type="image/png" sizes="16x16" href="" class="rounded" />

    <script>
        function createFavicon() {
            // Create a canvas element
            var canvas = document.createElement('canvas');
            canvas.width = 64;
            canvas.height = 64;
            var ctx = canvas.getContext('2d');

            // Apply border-radius using canvas clipping
            ctx.beginPath();
            ctx.arc(32, 32, 32, 0, Math.PI * 2); // Circular clipping for the border radius
            ctx.clip();

            // Fill background with #6b51df color
            ctx.fillStyle = "#6b51df";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            // Set the text properties and draw "E" in white at the center
            ctx.font = "bold 45px Arial";
            ctx.fillStyle = "#ffffff";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.fillText("E", canvas.width / 2, canvas.height / 2);

            // Create a data URL and set it as the favicon
            var link = document.getElementById('dynamic-favicon');
            link.href = canvas.toDataURL("image/png");
        }

        // Call the function to create the favicon
        createFavicon();
    </script>


    <!-- Datatables -->
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/owl-carousel/css/owl.theme.default.min.css') }}" />
    <!-- JQVMap -->
    <link href="{{ asset('admin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- Custom Style -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('admin') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('admin/images/logo.png') }}" alt="" />
                <img class="logo-compact" src="{{ asset('admin/images/logo-text.png') }}" alt="" />
                <span class="m-2 brand-title">EduPredict</span>
            </a>


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- Add anything here if needed -->
                        </div>
                        <ul class="navbar-nav header-right">
                            <!-- Profile and Logout Dropdown -->
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="icon-key"></i>
                                            <span class="ml-2">Logout</span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--**********************************
            Header end
        ***********************************-->
