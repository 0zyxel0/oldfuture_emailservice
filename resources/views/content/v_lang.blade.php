<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OLDFUTURE</title>
   @include('content.req_style')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" style="background: black;">
<div id="vueapp">

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-blocks">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div>
    <!--PreLoader Ends-->
    <!-- header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg transparent-bg static-nav">
            <div class="container">
                <a class="navbar-brand" href="index-de.html">
                    <img src="{{asset(url('/public/images/of-white-logo.png'))}}" alt="logo" class="logo-default">
                    <img src="{{asset(url('/public/images/of-white-logo.png'))}}" alt="logo" class="logo-scrolled">
                </a>
            </div>

        </nav>
        <!-- End side menu -->
    </header>
    <!-- header -->
    <!--Main Slider-->

    <!--Main Slider ends -->
    <!--half img section-->
    <div class="container center-block" style="margin-top: 100px;">

        <div class="row">
            <div class="col-lg-4 col-md-4" data-wow-delay="450ms">
                <a href="{{url('/de')}}">
                    <div class="team-box no-hover top60 wow fadeInUp">

                        <div class="team-content gradient_bg">
                            <h1>
                                <span class="flag-icon flag-icon-de"></span>
                            </h1>
                            <h3>German</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="{{url('/fr')}}">
                    <div class="team-box no-hover top60 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-content gradient_bg">
                            <h1>
                                <span class="flag-icon flag-icon-gf"></span>
                            </h1>
                            <h3>French</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="{{url('/en')}}">
                    <div class="team-box no-hover top60 wow fadeInUp" data-wow-delay="350ms">

                        <div class="team-content gradient_bg">
                            <h1>
                                <span class="flag-icon flag-icon-gb"></span>
                            </h1>
                            <h3>English</h3>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
    </section>

</div>
<!--Footer ends-->

@include('content.req_scripts')
</body>
</html>