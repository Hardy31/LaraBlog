




<html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
<head>
    <!-- Document Settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Page Title -->
    <title>Kotha Pro - The Most Powerful Blog Theme</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i%7cOswald:300,400,500,600,700%7cPlayfair+Display:400,400i,700,700i"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('../public/css/post.css')}}">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('../public/js/post.js')}}"></script>
    <![endif]-->



<body>
<!--
<img src="../../public/joda.png">

-->
<header class="kotha-menu marketing-menu">
    <nav class="navbar  navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="top-social-icons list-inline pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="top-search">
                            <a href="#" class="sactive">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav text-uppercase pull-left">
                        <li class="">
                            <a href="../../../" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Home</a>
                            <!--
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index-2.html">Home Default</a></li>
                                <li class=""><a href="index-feminine.html">Home Feminine</a></li>
                                <li class=""><a href="index-travel.html">Home Travel</a></li>
                                <li class=""><a href="index-food.html">Home Food</a></li>
                                <li class=""><a href="index-material.html">Home Material</a></li>
                                <li class=""><a href="index-marketing.html">Home Digital Marketing</a></li>
                                <li class=""><a href="index-retro.html">Home Retro Blog</a></li>
                                <li class=""><a href="index-archi.html">Home Architecture</a></li>
                                <li class=""><a href="index-magazine.html">Home Magazine</a></li>
                            </ul>
                            -->
                        </li>
                        <li class="">
                            <a href="../../../" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false"></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button"
                               aria-haspopup="true" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index-2.html">Home Default</a></li>
                                {{ "foreach" }}
                            </ul>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index-2.html">Home Default</a></li>
                                {{ "foreach" }}
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav text-uppercase pull-right">
                        <li class="">
                            {{"navBar"}}
                            <a href="../../../user/logout" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Logout</a>
                        </li>
                        <li class="">
                            <a href="#" class="" data-toggle=""
                               role="button"

                                <img src="/public/images/avatars/{{'avatar'}}" alt="" class="img-circle" height="20">
                                <img src="/public/img/{{'avatar-JPG'}}" alt="">
                            </a>
                        </li>



                        <div class="show-search">
                            <form role="search" method="get" id="searchform" action="#">
                                <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                            </form>
                        </div>
                </div>
            </div>
            <!-- /.container-fluid -->
    </nav>
    <div class="kotha-logo text-center">
        <h1><a href="../../../"><img src="/img/kotha-logo.png" alt="kothPro"></a></h1>
    </div>
</header>
<div class="kotha-default-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">


              {{"Статья целиком Cnfnmz wtkbrjv"}}
                @yield('content')
                @yield('creat')


                <div class="post-pagination  clearfix">
                    <ul class="pagination text-left">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="kotha-sidebar">
                    <aside class="widget about-me-widget  text-center">
                        <div class="about-me-content">
                            <div class="about-me-img">
                                <img src="../../public/assets/images/me.jpg" alt="" class="img-me img-circle">
                                <h2 class="text-uppercase">Kotha Smith</h2>
                                <p>Kotha Smith is an enthusiastic and passionate Story Teller. He loves to do different
                                    home-made things
                                    and share to the world.</p>
                            </div>
                        </div>
                        <div class="social-share">
                            <ul class="list-inline">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget news-letter-widget">
                        <h2 class="widget-title text-uppercase text-center">Get Newsletter</h2>
                        <form action="#">
                            <input type="email" placeholder="Your email address" required>
                            <input type="submit" value="Subscribe Now"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>
                    </aside>



                    @yield('popular-post')

                    @yield('last-post')



                    <aside class="widget add-widget">
                        <h2 class="widget-title text-uppercase text-center">Реклама/Advertisement</h2>

                        <div class="add-image">
                            <a href="#"><img src="../../public/sss.svg" alt=""></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>





<footer>
    <div class="container">
        <div class="footer-widget-row">
            <div class="footer-widget contact-widget">
                <div class="widget-title">
                    <img src="../../public/sss.svg" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eaccusam et justo duo
                    dolores eteem.</p>
                <div class="address">
                    <h4 class="text-uppercase">contact Info</h4>
                    <p> 239/2 NK Street, DC, USA</p>
                    <p> Phone: +123 456 78900</p>
                    <a href="mailto:theme@kotha.com">theme@kotha.com</a>
                </div>
            </div>
            <div class="footer-widget twitter-widget">
                <h2 class="widget-title text-uppercase">
                    Latest TWeeTs
                </h2>
                <div class="single-tweet">
                    <p>Тема была взята с сайта бутстрап «kotha - персональная тема блога WordPress»<br>
                        <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>


            </div>


        </div>
    </div>
    <div class="container-fluid text-center ft-copyright">
        <p>&copy; 201 <a href="#">Kotha PRO </a> - Designed with <i class="fa fa-heart"></i> by <a
                href="http://shapedtheme.com/">ShapedTheme</a></p>
    </div>
</footer>
<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!--//Script//-->



</body>
