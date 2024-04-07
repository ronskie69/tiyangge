<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet"/>
        <!-- Styles -->
        <!-- OWL -->
        <link rel="stylesheet" href="{{ asset('lib/owl/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/owl/dist/assets/owl.theme.default.min.css') }}">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('lib/owl/dist/owl.carousel.min.js') }}"></script>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            * {
                box-sizing: border-box !important;
            }
            body {
                font-family: 'Poppins', sans-serif;
                overflow-x: hidden !important;
            }
            .superNav {
                font-size:13px;
            }
            .superNav a {
                font-size:14px;
                font-weight:700
            }
            .form-control {
                outline:none !important;
                box-shadow: none !important;
            }
            .item1  {
                position: relative;
                height: 480px;
                width: 100%;
            }
            .item2 {
                position: relative;
                height: 250px;
                width: 100%;
            }
            .item3 {
                position: relative;
                height: 150px;
                width: 100%;
            }
            .item3 .item-caption > div {
                position: absolute;
                bottom: 0;
                display: flex;
                background: #fff;
                width: 100%;
            }
            .item-caption > div small {
                text-decoration: line-through;
                color: #a0aec0;
            }
            .item1 img, 
            .item2 img,
            .item3 img {
                position: absolute;
                height: 100%;
                object-fit: fill;
                width: 100%;
            }
            .d-flex {
                position: relative;
                overflow-x: hidden !important;  
            }
            .linky {
                font-size: 80%;
                text-decoration: underline;
            }
            @keyframes slide {
                0% {
                    transform: translateX(30%);
                }
                100% {
                    transform: translateX(-30%);
                    /*The width of the page needs to be taken into consideration*/
                }
            }
            .sale_sale {
                transform: translate3d(0, 0, 0);
                animation: slide 30s linear infinite;
            }
            /* BEST SELLERS */
            .tab-pane, .tab-content {
                height: fit-content !important;
            }
            .tab-content .card {
                width: fit-content !important;
                border-radius: 0% !important;
            }
            .card-img-top {
                width: 190px;
                border-radius: 0% !important;
                height: 120px;
            }
            .tab-content .card .card-text {
                font-weight: 90%;
            }
            /* FAQ */
            .accordion-button:not(.collapsed) {
                color: #e4a11b;
            }
            @keyframes slide {
                0% {
                    transform: translateX(30%);
                }
                100% {
                    transform: translateX(-30%);
                    /*The width of the page needs to be taken into consideration*/
                }
            }
            .sale_sale {
                transform: translate3d(0, 0, 0);
                overflow: hidden;
                animation: slide 30s linear infinite;
            }
            @media screen and (max-width:540px){
                .centerOnMobile {
                    text-align:center
                }
                .pad {
                    padding: 20px;
                }
            }
        </style>
    </head>
    <body class="antialiased position-relative">
        <div class="header">
            <div class="superNav border-bottom py-2 bg-light">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                      <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>87000</strong></span>
                      <span class="me-3"><i class="fa-solid fa-envelope me-1 text-warning"></i> <strong>sales@tiyang-ge.com</strong></span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                      <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
                    </div>
                  </div>
                </div>
              </div>
              <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fa-solid fa-shopping-cart me-2"></i> <strong class="text-warning">TIYANG&nbsp;&bull;&nbsp;</strong>GE</a>
                  <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                  </button>
              
                  <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                    <div class="input-group">
                      <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                      <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                    </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="ms-auto d-none d-lg-block">
                      <div class="input-group">
                        <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                      </div>
                    </div>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#">About</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

        @yield('content-item')
       
    </body>
</html>
