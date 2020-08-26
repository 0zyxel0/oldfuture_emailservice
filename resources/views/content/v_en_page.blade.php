<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OLDFUTURE</title>
    @include('content.req_style')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
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
            <div class="container" class="brand-logo">
                <a class="navbar-brand" href="{{url('/en')}}">
                    <img src="{{asset(url('/public/images/of-black-logo.png'))}}" alt="logo" class="logo-default">
                    <img src="{{asset(url('/public/images/of-white-logo.png'))}}" alt="logo" class="logo-scrolled">
                </a>
            </div>

        </nav>
        <!-- End side menu -->
    </header>
    <!-- header -->
    <!--Main Slider-->
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE 3  -->
                <li data-index="rs-03"
                    data-transition="fade"
                    data-slotamount="default"
                    data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut"
                    data-masterspeed="2000"
                    data-fsmasterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset(url('/public/images/OLF_Webtitel_Lobby.png'))}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="9" data-no-retina>
                    <div class="banner-text">
                        <!-- -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['right','right','right','center']" data-hoffset="['-150','50','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['250','250','250','250']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none">
                            <img alt="SEO" src="{{asset(url('/public/images/lady_monitor.png'))}}">
                        </div>
                        <!-- -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-100']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1200" data-splitin="none" data-splitout="none">
                            <h1 class="text-capitalize fontbold greyText text-center"> EASY-DISP </h1>
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none">
                            <h3 class="font-xlight greyText text-center">Hand disinfection with TV-Infoscreen</h3>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','left','left','center']" data-hoffset="['0','50','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','210']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','right','center']" data-fontsize="['24','24','20','20']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                         data-start="1500" data-splitin="none" data-splitout="none">
                        <hr>
                        <h3 class="greyText font-bold text-center">SWISS MADE    <img class="flag" alt="SEO" src="{{asset(url('/public/images/swiss_flag_20x20.png'))}}"></h3>
                        <hr>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--Main Slider ends -->
    <!--half img section-->
    <div id="twocopies">
        <section class="half-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 nopadding">
                        <div class="split-box center-block container-padding equalheight">
                            <div class="heading-title padding">
                                <h3 class="wow fadeInUp" data-wow-delay="300ms">Contact-free <b>Hand Disinfection Dispenser</b> and <b>Information System Display</b> in one</h3>
                                <br/>
                                <h4 class="heading_space wow fadeInUp" data-wow-delay="500ms">Protect the health of your customers and employees. <strong>EASY-DISP</strong> is a contact-free dispenser system for hand disinfection with integrated TV screen for individually configurable information. Using Images, Animation or Films - transmit your messages directly and easily where they are seen.</h4>.
                                <hr>
                                <!--Features -->
                                <div class="row" id="app-feature">
                                    <div class="col-lg-6 col-md-4 col-sm-12">
                                        <div class="content-right clearfix">
                                            <div class="feature-item left top30 bottom50 wow fadeInUp featureHeight" data-wow-delay="300ms">
                                                <span class="icon"> <i class="fa"><img class="custom-icons" alt="SEO" src="{{asset(url('/public/images/icons/icon-1.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>Contact-free, sensor-controlled dispenser for hand disinfection with 3000ml capacity</p>
                                                </div>
                                            </div>
                                            <div class="feature-item left top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="350ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons" alt="SEO" src="{{asset(url('/public/images/icons/icon-2.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>Professional TV station for 24/7 operation, LTE technology, 32GB SSD, with various data packages starting from 50 MB per month available</p>
                                                </div>
                                            </div>
                                            <div class="feature-item left top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="400ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons-2" alt="SEO" src="{{asset(url('/public/images/icons/icon-6.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>Screen with full or split-screens (1/3 to 2/3) display. Ideal for your additional information or advertising</p>
                                                </div>
                                            </div>
                                            <div class="feature-item left top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="400ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons" alt="SEO" src="{{asset(url('/public/images/icons/icon-7.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>Content management via integrated web browser and digital signage software which are industry standard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 col-sm-12">
                                        <div class="content-right clearfix">
                                            <div class="feature-item right top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="300ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons-2" alt="SEO" src="{{asset(url('/public/images/icons/icon-3.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p><strong>Plug & Play</strong> - no further installations necessary. Available as stand system or for wall mounting that are available in different sizes.</p>
                                                </div>
                                            </div>
                                            <div class="feature-item right top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="350ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons" alt="SEO" src="{{asset(url('/public/images/icons/icon-4.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>Best in Quality - Made in Switzerland</p>
                                                </div>
                                            </div>
                                            <div class="feature-item right top30 bottom30 wow fadeInUp featureHeight" data-wow-delay="400ms">
                                                <span class="icon"><i class="fa"><img class="custom-icons" alt="SEO" src="{{asset(url('/public/images/icons/icon-5.png'))}}"></i></span>
                                                <div class="text">
                                                    <h5> &nbsp; </h5>
                                                    <p>
                                                        You can easily order disinfectants from RIWAX®, against bacteria, germs and viruses (Coroa virus) at the same time
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- Features End -->
                            </div>
                        </div>
                    </div>
                    <!-- right side -->
                    <div class="col-lg-6 nopadding darkbackground">
                        <div class="split-box container-padding equalheight">
                            <div class="heading-title padding_top_half">
                                <div class="text-center col-lg-8">
                                    <p class="heading_space_01 wow whitecolor fadeInUp" data-wow-delay="500ms">Experience how flexible your information and advertising messages can be presented on the screens of <strong>EASY-DISP</strong>. Simply Choose a Zone from the choices below.</p>
                                </div>
                                <div class="center-block col-lg-6"> <img class="flag" alt="SEO" src="{{asset(url('/public/images/down_angle_1.png'))}}"></div>
                                <hr>
                                <!--Monitor -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-5 spacer">
                                            <div style="position: relative; left: 0; top: 0;">
                                                <img v-bind:src="image" alt="" class="img-src">
                                                <img src="{{asset(url('/public/images/monitor_vector_04.png'))}}" class="img-frame">
                                            </div>
                                        </div>

                                        <div style="padding-top:10%; " class="col-md-4 col-4 text-md-left wow fadeInLeft" data-wow-delay="300ms">
                                            <p class="whitecolor text-center">Select one of the following display options</p>
                                            <div id="flat-filters" class="cbp-l-filters dark bottom30">



                                                <div data-target="#demo"  class="cbp-filter-item zonebtn">
                                                    <button @click="image1" type="button" class="btn btn-outline-light"><i class="fa fa-check"></i></button> &nbsp; &nbsp;
                                                    <label class="whitecolor">1 Zones</label>
                                                </div>
                                                <br/>
                                                <div data-target="#demo"  class="cbp-filter-item zonebtn">
                                                    <button @click="image2" type="button" class="btn btn-outline-light"><i class="fa fa-check"></i></button> &nbsp; &nbsp;
                                                    <label class="whitecolor">2 Zones</label>
                                                </div>
                                                <br/>
                                                <div data-target="#demo" class="cbp-filter-item zonebtn">
                                                    <button @click="image3" type="button" class="btn btn-outline-light"><i class="fa fa-check"></i></button> &nbsp; &nbsp;
                                                    <label class="whitecolor">4 Zones</label>
                                                </div>
                                                <br/>
                                                <div data-target="#demo" class="cbp-filter-item zonebtn">
                                                    <button @click="image4" type="button" class="btn btn-outline-light"><i class="fa fa-check"></i></button> &nbsp; &nbsp;
                                                    <label class="whitecolor">Multizones</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Monitor End -->
                                </div>
                                <!-- Monitor End -->
                            </div>
                        </div>
                    </div>
                    <!-- right side end -->
                </div>
            </div>
        </section>
        <!--Some Feature -->
        <section id="our-feature" class="single-feature padding_bottom_half">
            <div class="container">
                <div class=" heading_space col-lg-12 top50">
                    <h3 style="margin-left: -15px;"class="wow fadeInUp" data-wow-delay="300ms">Whether standing or on the wall - <b>EASY-DISP</b> offers you <b>countless application possibilities</b> in your company</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 text-md-left text-center wow fadeInLeft" data-wow-delay="300ms">
                        <p class="heading_space_01 wow fadeInUp" data-wow-delay="500ms"><strong>EASY-DISP</strong> is available in three screen sizes with 22", 32" or 43". Depending on the selected format, the system can be used free-standing or wall-mounted. This offers you the greatest flexibility for the targeted presentation of your information and advertising.</p>
                        <p class="heading_space_01 wow fadeInUp" data-wow-delay="500ms">And so that your <strong>EASY-DISP</strong> fits you perfectly, we will be happy to place your company's logo to the system on request.</p>
                        <p class="heading_space_01 wow fadeInUp" data-wow-delay="500ms">Read more <b>here</b></p>
                        <h4 class="heading_space_01 wow fadeInUp" data-wow-delay="500ms"><strong>EASY-DISP : </strong>3 Sizes, 2 System Variants, All-in-One</h4>
                    </div>
                    <div class="col-md-3 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                        <div class="image"><img alt="SEO" src="{{asset(url('/public/images/2-monitors.png'))}}"></div>
                    </div>
                    <div class="col-md-3 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                        <div class="image"><img alt="SEO" src="{{asset(url('/public/images/monitor-wall.jpg'))}}"></div>
                    </div>
                    <div class="col-md-9 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                        <div class="image"><img alt="SEO" src="{{asset(url('/public/images/sizes_01.jpg'))}}"></div>
                    </div>
                    <div class="col-md-3 col-sm-5 wow fadeInRight" data-wow-delay="350ms">
                        <div class="image"><img alt="SEO" src="{{asset(url('/public/images/monitor_back_01.jpg'))}}"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Some Feature ends-->

        <!-- Tables -->
        <section class="darkbackground padding_bottom_half">
            <div class="container whitecolor">
                <div class=" heading_space col-lg-12 padding_top_half">
                    <h3 style="margin-left: -15px;" class="wow fadeInUp whitecolor" data-wow-delay="300ms">A tailor-made offer for every budget. Choose one of the attractive <b>EASY-DISP rental options</b></h3>
                </div>
                <h4 class="wow fadeInUp" data-wow-delay="300ms"><strong>1</strong> Select your EASY-DISP system</h4>
                <table class="table top30">
                    <thead class="thead-green">
                    <tr>
                        <th scope="col" v-for="data in displayChoices" :key="data.id">
                            <div class="radio-container">
                                <label class="checkbox-label chkbox">

                                    <input class="radio" type="radio" v-bind:value="data" name="displayType" v-model="selectedDisplay" @change="computedDisplayTotal()">
                                    <span class="checkbox-custom circular "></span>
                                    <strong class="chkbox-label">@{{data.display_name}}</strong>
                                </label>

                            </div>
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">Wall Mounted</td>
                        <td>Wall Mounted</td>
                        <td>Free Standing</td>
                        <td>Free Standing</td>
                    </tr>
                    <tr>
                        <td scope="row">Indoor</td>
                        <td>Indoor</td>
                        <td>Indoor</td>
                        <td>Indoor</td>
                    </tr>
                    <tr>
                        <td scope="row">Protective Glass Screen</td>
                        <td>Protective Glass Screen</td>
                        <td>Protective Glass Screen</td>
                        <td>Protective Glass Screen</td>
                    </tr>
                    <tr>
                        <td scope="row">4mm / extra clear</td>
                        <td>4mm / extra clear</td>
                        <td>4mm / extra clear</td>
                        <td>4mm / extra clear</td>
                    </tr>
                    <tr>
                        <td scope="row">Dispenser 3000ml</td>
                        <td>Dispenser 3000ml</td>
                        <td>Dispenser 3000ml</td>
                        <td>Dispenser 3000ml</td>
                    </tr>
                    <tr>
                        <td scope="row">ab <strong>CHF 86.-</strong> / Month</td>
                        <td>at <strong>CHF 86.-</strong> / Month</td>
                        <td>at <strong>CHF 86.-</strong> / Month</td>
                        <td>at <strong>CHF 86.-</strong> / Month</td>
                    </tr>
                    </tbody>
                </table>
                <h4 class="wow fadeInUp top50" data-wow-delay="300ms"><strong>2 </strong>Select your data package for the EASY-DISP LTE network</h4>
                <table class="table top30">
                    <thead class="thead-green">
                    <tr>
                        <th scope="col" v-for="datapacket in dataChoices" :key="datapacket.id">
                            <div class="radio-container">
                                <label class="checkbox-label chkbox">
                                    <input type="radio" name="dataValue"  v-bind:value="datapacket" v-model="selectedDataBundle" @change="computedDataTotal()">
                                    <span class="checkbox-custom circular"></span>
                                    <strong class="chkbox-label">@{{datapacket.display_name}} / Month</strong>
                                </label>

                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row"><strong>CHF 5.-</strong> / Month</td>
                        <td><strong>CHF 19.-</strong> / Month</td>
                        <td><strong>CHF 29.-</strong> / Month</td>
                        <td><strong>CHF 59.-</strong> / Month</td>
                    </tr>
                    </tbody>
                </table>
                <h4 class="wow fadeInUp top50" data-wow-delay="300ms"><strong>3</strong> Your Monthly Total</h4>
                <table class="table top30 small-table">
                    <thead class="thead-green small-table">
                    <tr>
                        <th scope="col"> <span><i class="fa fa-arrow-right"></i></span>&nbsp; &nbsp;<strong>CHF @{{totalAmount}}</strong></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </section>
        <!-- Tables End -->
        <!-- Tables -->
        <section class="darkbackground padding_bottom_half">
            <div class="container whitecolor">
                <div class=" heading_space_01 col-lg-12">
                    <h3 style="margin-left: -15px;" class="wow fadeInUp whitecolor" data-wow-delay="300ms">Your subscription order for <b>EASY-DISP</b>.</h3>
                </div>
                <h4 class="wow fadeInUp" data-wow-delay="300ms">I book the following order options:</h4>
                <table class="table top30">
                    <thead class="thead-green">
                    <tr>
                        <th scope="col" v-for="data in displayChoices" :key="data.id">
                            <div class="radio-container">
                                <label class="checkbox-label chkbox">
                                    <input type="radio" class="chkbox" v-bind:value="data" name="displayOrder" v-model="selectedDisplay" @change="computedDisplayTotal()">
                                    <span class="checkbox-custom circular"></span>
                                    <strong class="chkbox-label">22" WALL</strong> (@{{data.orderCode}})
                                </label>
                            </div>
                        </th>
                    </tr>
                    </thead>
                </table>
                <h4 class="wow fadeInUp top50" data-wow-delay="300ms">Together with the following data package for the <b>EASY-DISP</b> LTE network:</h4>
                <table class="table top30">
                    <thead class="thead-green">
                    <tr>
                        <th scope="col" v-for="datapacket in dataChoices" :key="datapacket.id">
                            <div class="radio-container">
                                <label class="checkbox-label chkbox">
                                    <input class="chkbox" type="radio" name="dataOrder"  v-bind:value="datapacket" v-model="selectedDataBundle" @change="computedDataTotal()">
                                    <span class="checkbox-custom circular"></span>
                                    <strong class="chkbox-label">@{{datapacket.display_name}} / Month</strong>
                                </label>
                            </div>
                        </th>
                    </tr>
                    </thead>
                </table>

                <h4 class="wow fadeInUp top50" data-wow-delay="300ms">Additionally, I will order DESINEX disinfectant from RIWAX® at the exclusive offer price</h4>
                <table class="top30 col-lg-8">
                    <thead class="thead-green">
                    <tr>
                        <th scope="col" style="padding: 10px;" >
                            <div>
                                <h4 class="greyText" style="" scope="col">6 Liters <strong>RIWAX® DESINEX GEL</strong> for <strong>CHF 90.-</strong></h4>
                                <span class="greyText">Price excl. VAT and shipping</span>
                            </div>
                        </th>
                        <th>
                            <div>
                                <h4 class="greyText" style="" scope="col">Quantity</h4>
                            </div>
                        </th>
                        <th>
                            <div>
                                <input style="height:60px; width: 95%;" class="form-control" type="tel" placeholder=""  v-model="desinexCount" @change="computedOrderTotal()">
                            </div>
                        </th>
                    </tr>
                    </thead>
                </table>



                <h3 class="wow fadeInUp top30" data-wow-delay="300ms">Total Order Amount</h3>
                <span> excl. VAT</span>
                <table class="table top30 small-table">
                    <thead class="thead-green small-table">
                    <tr>
                        <th scope="col"> <span><i class="fa fa-arrow-right"></i></span>&nbsp; &nbsp;<strong>CHF @{{totalOrderAmount}}</strong></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </section>
        <!-- Tables End -->
        <!-- Contact US -->
        <section id="contactus" class="darkbackground">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="heading-title heading_space_01 wow fadeIn" data-wow-delay="300ms">
                            <h3 class="whitecolor">Your Address Details</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 margin_bottom">
                        <div class="getin_form wow fadeInUp" data-wow-delay="400ms">
                            <div class="row whitecolor">
                                <div class="col-sm-12" id="result"></div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font"> Family Name:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder="" v-model="lastname">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font"> Given Name:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder=" " v-model="firstname">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font">Company:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder=" " v-model="firma">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font">Telephone:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder=" " v-model="telephone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 margin_bottom">
                        <div class="getin_form wow fadeInUp" data-wow-delay="400ms">
                            <div class="row whitecolor">

                                <div class="col-sm-12" id="result"></div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font"> Street:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder="" v-model="streets">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35 post">
                                        <h4 class="en-font"> Post Code | City:</h4>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder="Post Code" v-model="plz">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="text" placeholder="City" v-model="ort">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group bottom35" style="margin-top:10px;">
                                        <h4 class="en-font"> Email:</h4>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group bottom35">
                                        <input class="form-control" type="email" placeholder="" v-model="emailaddress">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">

                                </div>
                                <div class="col-sm-6">
                                    <button style="border-radius: 0;" type="button" class="button btnprimary" v-on:click="submitEmailOrder()">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact US Ends-->
        <!--Site Footer Here-->
        <footer id="site-footer" style="padding: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="https://www.facebook.com/oldfuture.ch"><i class="fa fa-facebook"></i> </a> </li>
                            <li><a href="https://www.linkedin.com/in/marc-egli-a03964142/"><i class="fa fa-linkedin"></i> </a> </li>
                            <li><a href="https://www.instagram.com/oldfuture_official/"><i class="fa fa-instagram"></i> </a> </li>
                        </ul>
                        <p style="margin-top: -20px; font-size: 18px;" class="copyrights wow fadeInUp" data-wow-delay="350ms"> <a href=""><i class="fa fa-envelope-o"></i>&nbsp; &nbsp;sales@oldfuture.ch</a> </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--Footer ends-->
@include('content.req_scripts')

</body>
</html>