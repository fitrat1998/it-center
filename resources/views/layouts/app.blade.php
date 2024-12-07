<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webartinfo.com/templatemonster/sikshaa/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 07:38:05 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/icon.png">
    <title>{{ env('APP_NAME', "IT Markaz") }}</title>
    <meta name="description" content="sikshaa"/>
    <meta name="keywords" content="sikshaa"/>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="{{ asset('assets/vendor/slick/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/slick/slick/slick-theme.css') }}" rel="stylesheet">
    <!-- Icofont -->
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity=""
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <style>
        /* .banner-search {
            position: relative;
            height: 100vh;
        } */
        .carousel-inner {
            height: 100%;
        }

        .carousel-item img {
            object-fit: cover;
            height: 80vh;
            padding: 20px;

        }

        .carousel-image {
            position: relative;
            height: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            z-index: 10;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            border: 2px solid rgba(255, 255, 255, 0.8); /* Light white border */
            padding: 10px;
            border-radius: 10px; /* Rounded corners */
            max-width: 80%; /* Limit the width of the caption */
            /* filter: blur(1px); */
        }

        /* Navbar Background */
        .custom-navbar {
            background-color: #004a9f;
            padding: 10px 20px;

        }

        /* Navbar Links */
        .navbar .nav-link {
            color: #ffffff;
            font-size: 16px;
            padding: 16px !important;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect on Links */
        .navbar .nav-link:hover {
            background-color: #004a9f;
            padding: 12px !important;
            color: #fff !important;
            text-decoration: none;
        }

        /* Active Link Effect */
        .custom-navbar .nav-link.active {
            background-color: #ffffff;
            color: #004a9f;
            font-weight: bold; /* Tanlangan linkni qalin qilib ko'rsatish */
        }

        /* Buttons for right-side */
        .custom-navbar .btn {
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
            background-color: #ffffff;
        }

        /* Hover Effect for Buttons */
        .custom-navbar .btn:hover {
            background-color: lightgrey;
            color: #004a9f;
            border-color: #ffffff;
        }

        /* Icon Buttons */
        .custom-navbar .icon-btn {
            background-color: transparent;
            color: #ffffff;
            border: 1px solid #ffffff;
            border-radius: 5px;
            padding: 6px 10px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover Effect for Icon Buttons */
        .custom-navbar .icon-btn:hover {
            background-color: #ffffff;
            color: #004a9f;
        }

        /* Desktop yoki katta ekranlar uchun */
        #myDiv {
            margin-right: 450px !important;
        }

        .menu {
            display: flex; /* Tugmalar ko‘rinadi */
        }

        .header-right-content {
            display: none !important;
        }

        /* Mobil ekranlar uchun (768px yoki kichikroq) */
        @media (max-width: 768px) {
            #myDiv {
                margin-right: 0 !important;
            }

            .menu {
                display: none; /* Menyu butunlay yashiriladi */
            }

            .nav {
                display: none;
            }

            .header-right-content {
                display: block !important;
            }

            .menu-bar {
                color: #fff;
                /*border-radius: 3px;*/
            }
        }

        .custom-margin {
            margin-bottom: 500px;
        }

    </style>

</head>
<body class="bg-light">
<!-- navbar -->
@yield('content')
</body>
<!-- Jquery Js -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js" integrity=""
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slick Js -->
<script src="{{ asset('assets/vendor/slick/slick/slick.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Mirrored from webartinfo.com/templatemonster/sikshaa/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 07:39:15 GMT -->
</html>
