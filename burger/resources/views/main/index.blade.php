<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Z'Burger - Accueil</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">


    <!-- Rev slider css -->
    <link href="{{asset('assets/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendors/revolution/css/navigation.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&amp;family=Open+Sans:wght@400;600;700;800&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">


    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>Au service de tout Paris</li>
                        <li><a href="mailto:contact@zburger.fr"><span class="icon far fa-envelope"></span>
                                contact@zburgger.fr </a></li>
                    </ul>
                </div>
                <div class="top-right clearfix">


                    <div class="option-list">
                        <!-- Cart Button -->
                        <div class="cart-btn">
                            <a href="{{ route('panier') }}" class="icon flaticon-shopping-cart"></a>
                        </div>
                        <!-- Search Btn -->

                    </div>
                    <!--Social Box-->
                    <ul class="social-box" style="padding-left: 20px">
                        <li><a href="{{route('commandes-show')}}"><span class="icon far fa-user"></span></a></li>
                        <li><a href="{{ route('logout.perform') }}"
                              ><span
                                    class="fa fa-power-off"></span></a></li>
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="{{route('dashboard')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""
                                                                 title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light" style="
    padding-right: 167px;
">

                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{route('dashboard')}}">Accueil</a>

                                    </li>
                                    <li class=""><a href="{{route('shop')}}">Boutique</a>

                                    </li>
                                    <li class=""><a href="{{route('menu')}}">Menu</a>

                                    </li>
                                    <li><a href="{{route('gallery')}}">Galerie</a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                            <div class="order">
                                Commandez Maintenant
                                <span><a href="tel:1800-456-7890">(+33) 790 736 012</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('dashboard')}}" class="img-responsive"><img src="{{asset('assets/images/logo-small.png')}}" alt=""
                                                                  title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('dashboard')}}">Accueil</a>

                                </li>
                                <li class=""><a href="{{route('shop')}}">Boutique</a>

                                </li>
                                <li class=""><a href="{{route('menu')}}">Menu</a>

                                </li>
                                <li><a href="{{route('gallery')}}">Galerie</a></li>

                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!-- End Main Header -->

    <!--================Slider Area =================-->
    <section class="main_slider_area slider_bg">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{asset('assets/images/main-slider/slider-item-1.png')}}" data-rotate="0"
                    data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">

                        <div class="tp-caption tp-resizeme sm_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','195','195']"
                             data-fontsize="['30','30','30','25','25']" data-lineheight="['89','89','89','50','45']"
                             data-width="['670','670','670','400','320']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">NOUVEAU
                        </div>

                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['230','230','230','240','240']"
                             data-fontsize="['72','72','72','40','35']" data-lineheight="['89','89','89','50','45']"
                             data-width="['670','670','670','400','320']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">Hambuger Maison
                        </div>
                        <div class="tp-caption tp-resizeme middle_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['310','310','310','295','290']"
                             data-fontsize="['30','30','30','25','25']" data-lineheight="['89','89','89','50','35']"
                             data-width="['670','670','670','600','600','400']" data-height="none"
                             data-whitespace="normal" data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">avec du poulet et du cheddar
                        </div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['390','390','390','355','345','370']"
                             data-fontsize="['20','20','20','20','20','20']" data-lineheight="['28','28','28','28']"
                             data-width="['600','600','600','550','400','400']" data-height="none"
                             data-whitespace="normal" data-type="text" data-responsive_offset="on"
                             data-transform_idle="o:1;"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            Une fois que vous l'aurez essayé, vous l'aimerez.
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['480','480','480','440','455','475']"
                             data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']"
                             data-width="['670','670','670','550','400']" data-height="none" data-whitespace="nowrap"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="view_all_btn" href="{{route('shop')}}">Essayez-le</a>
                        </div>
                        <div class="tp-caption   tp-resizeme" data-x="['right','right','right','left','15','15']"
                             data-hoffset="['-145','-145','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['115','115','170','50','50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                             data-frames='[{"from":"x:-50px;rY:20deg;sX:0.8;sY:0.8;opacity:0;","speed":3000,"to":"o:1;","delay":2250,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                             data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: -1;border-width:0px;cursor:pointer;"><img
                                src="{{asset('assets/images/main-slider/slider-item-1.png')}}" alt=""
                                data-ww="['591px','500px','400px','200px','200px']"
                                data-hh="['447px','400px','310px','150px','150px']" data-no-retina/>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{asset('assets/images/main-slider/slider-item-2.png')}}" data-rotate="0"
                    data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme sm_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['165','165','165','195','195']"
                             data-fontsize="['30','30','30','25','25']" data-lineheight="['89','89','89','50','45']"
                             data-width="['670','670','670','400','320']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">À ne pas rater
                        </div>

                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['230','230','230','240','240']"
                             data-fontsize="['72','72','72','40','35']" data-lineheight="['89','89','89','50','45']"
                             data-width="['670','670','670','400','320']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">Pizza au fromage ...
                        </div>
                        <div class="tp-caption tp-resizeme middle_text" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['310','310','310','295','290']"
                             data-fontsize="['30','30','30','25','25']" data-lineheight="['89','89','89','50','35']"
                             data-width="['670','670','670','600','600','400']" data-height="none"
                             data-whitespace="normal" data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                             data-textAlign="['left','left','left','left']">avec le jambon de dinde, ananas et
                            oignon
                        </div>


                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
                             data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                             data-voffset="['480','480','480','440','455','475']"
                             data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']"
                             data-width="['670','670','670','550','400']" data-height="none" data-whitespace="nowrap"
                             data-type="text" data-responsive_offset="on"
                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="view_all_btn" href="{{route('shop')}}">Je commande</a>
                        </div>
                        <div class="tp-caption   tp-resizeme" data-x="['right','right','right','left','15','15']"
                             data-hoffset="['-170','-170','0','0']" data-y="['bottom','center','center','top']"
                             data-voffset="['0','0','0','50','50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                             data-frames='[{"from":"x:-50px;rY:20deg;sX:0.8;sY:0.8;opacity:0;","speed":3000,"to":"o:1;","delay":2250,"ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                             data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: -1;border-width:0px;cursor:pointer;"><img
                                src="{{asset('assets/images/main-slider/slider-item-2.png')}}" alt=""
                                data-ww="['723px','500px','400px','200px','200px']"
                                data-hh="['626px','440px','340px','160px','160px']" data-no-retina/>
                        </div>

                    </div>
                </li>

            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!-- Spicy Section -->
    <section class="spicy-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Flavour Block -->
                <div class="flavour-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/pizza.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <div class="content">
                                    <h2>Pizza Calabriz <span>Mascarpone · Nduja Épicé</span></h2>
                                    <a href="{{route('shop')}}" class="title">Épicé</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Drink Block -->
                <div class="drink-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/drink.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <div class="content">
                                    <h2>Iced <span>Coffee</span></h2>
                                    <div class="title">ÉTÉ</div>
                                    <a href="{{route('shop')}}" class="read-more">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chips Block -->
                <div class="chips-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/chips.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <div class="content">
                                    <h2>Essayez notre <br> <span>Délicieuse</span></h2>
                                    <div class="title">French Fries</div>
                                    <a href="{{route('shop')}}" class="read-more">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Spicy Section -->


    <!-- Order Section -->
    <section class="order-section" style="background-image: url(assets/images/background/1.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Empty Column -->
                <div class="empty-column col-lg-5 col-md-12 col-sm-12">

                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="offer">Offre exlusive</div>
                        <h1>Veggi Fun Pizza</h1>
                        <div class="order-price">
                            <div class="price-inner">
                                <div class="price"><sup>€</sup>2<sub>Tranche</sub></div>
                                <ul class="order-offer">
                                    <li>- Poulet Hallon</li>
                                    <li>- Pizza d'été</li>
                                    <li>- Amoureux des légumes</li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{route('shop')}}" class="theme-btn btn-style-two"><span class="txt">Je Commande</span></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Order Section -->

    <!-- Combo Section -->
    <section class="combo-section" style="background-image: url(assets/images/background/2.jpg)">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Nos Offres <i>Tasty Combo</i></h2>
            </div>

            <div class="row clearfix">

                <!-- Combo Block -->
                <div class="combo-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/combo-1.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <h1>Offre du <span>Jour</span></h1>
                                <div class="title">Tasty Combo</div>
                                <div class="price"><span>Seulement à</span><sup>€</sup>10</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Combo Block -->
                <div class="combo-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/combo-2.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <h1>Humburg <span>Day</span></h1>
                                <div class="title">Tasty Combo</div>
                                <div class="price yellow"><span>Seulement à</span><sup>€</sup>8</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Combo Section -->

    <!-- Delivery Section -->
    <section class="delivery-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{asset('assets/images/resource/delivery.png')}}" alt=""/>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">nous garantissons</div>
                        <h1>Livraison en 30 minutes</h1>
                        <div class="text" style="z-index: 1;">
                            <p>Si vous avez une réunion, travaillez tard le soir et avez besoin d'un coup de pouce
                                supplémentaire.</p>
                            <p>Faites-le nous savoir et nous serons là</p>
                        </div>
                        <a href="{{route('shop')}}" class="theme-btn btn-style-three"><span
                                class="txt">Je commande</span></a>
                    </div>
                </div>

            </div>

            <div class="side-image">
                <img src="{{asset('assets/images/resource/app.png')}}" alt=""/>
            </div>

        </div>
    </section>
    <!-- Delivery Section -->


    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="outer-section">

            <div class="gallery-carousel owl-carousel owl-theme">

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset('assets/images/gallery/1.jpg')}}" data-fancybox="gallery-1"
                                           data-caption="" class="link"><span
                                                class="icon flaticon-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('assets/images/gallery/2.jpg')}}" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset('assets/images/gallery/2.jpg')}}" data-fancybox="gallery-1"
                                           data-caption="" class="link"><span
                                                class="icon flaticon-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('assets/images/gallery/3.jpg')}}" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset('assets/images/gallery/3.jpg')}}" data-fancybox="gallery-1"
                                           data-caption="" class="link"><span
                                                class="icon flaticon-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('assets/images/gallery/4.jpg')}}" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset('assets/images/gallery/4.jpg')}}" data-fancybox="gallery-1"
                                           data-caption="" class="link"><span
                                                class="icon flaticon-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('assets/images/gallery/5.jpg')}}" alt="">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset('assets/images/gallery/5.jpg')}}" data-fancybox="gallery-1"
                                           data-caption="" class="link"><span
                                                class="icon flaticon-expand"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Gallery Section -->

    <!--Main Footer-->
    <footer class="main-footer" style="background-image: url(assets/images/background/4.png)" th:fragment="footer">
        <div class="auto-container">

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!-- Info Widget -->
                        <div class="footer-widget info-widget">
                            <h4>Contact</h4>
                            <a class="number" href="tel:0790736012">(+33) 0790736012</a>
                            <ul class="email-list">
                                <li><a href="mailto:contact@zburger.fr ">contact@zburger.fr</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-6 col-md-12 col-sm-12">
                        <!-- Logo Widget -->
                        <div class="footer-widget logo-widget">
                            <div class="logo">
                                <a href="{{route('dashboard')}}"><img src="{{asset('assets/images/footer-logo.png')}}" alt=""/></a>
                            </div>
                            <div class="text">Z'Burgers <br> 24 rue Cristino Garcia <br> Saint-Denis, 93210
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!-- Info Widget -->
                        <div class="footer-widget timing-widget">
                            <h4>Horaires d'ouvertures</h4>
                            <ul class="timing-list">
                                <li>Mardi - Samedi <span>10:00 - 23:00</span></li>
                                <li>Dimanche <span>10:00 - 00:00</span></li>
                                <li>Lundi <span>Fermé</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="copyright">&copy; Copyright 2022 Z'Burgers.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="http://designarc.biz/demos/wengdo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value=""
                               placeholder="Search Here" required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Cake</a></li>
                <li><a href="#">Chocolate</a></li>
                <li><a href="#">Strawberry</a></li>
                <li><a href="#">Vanila</a></li>
                <li><a href="#">Mango Icecream</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Rev slider js -->
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>


</html>
