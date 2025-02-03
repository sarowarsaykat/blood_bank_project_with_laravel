<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="{{ asset('blood_donation/images/favicon.png') }}" />
    <!-- The styles -->
    <link rel="stylesheet" href="{{ asset('blood_donation/css/bootstrap.min.css') }}" />
    <link href="{{ asset('blood_donation/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('blood_donation/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('blood_donation/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('blood_donation/css/venobox.css" rel="stylesheet') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('blood_donation/css/styles.css') }}" />
    {{-- bootstrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Toastr-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
</head>

<body>

    {{-- <div id="preloader">
        <span class="margin-bottom"><img src="{{ asset('blood_donation/images/loader.gif') }}" alt="" /></span>
    </div> --}}

    <!--  HEADER -->

    <header class="main-header clearfix">

        <div class="top-bar clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-sm-12">

                        <p>Welcome to blood donation center.</p>

                    </div>

                    <div class="col-md-4col-sm-12">
                        <div class="top-bar-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>

                </div>

            </div> <!--  end .container -->

        </div> <!--  end .top-bar  -->

        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html"><img alt=""
                                src="{{ asset('blood_donation/images/logo.png') }}"></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ Route('home') }}" title="Home">Home</a></li>
                            <li><a href="{{ route('about_us') }}" title="About Us">About Us</a></li>
                            <li><a href="{{ route('donor_list') }}" title="donor_list">Donor</a></li>
                            <li>
                                <a href="#">Campaign</a>
                                <ul class="drop-down">
                                    <li><a href="{{ route('campaign_all') }}">All Campaigns</a></li>
                                    <li><a href="{{ route('campaign_single') }}">Single Campaign</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="drop"><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>


    </header> <!-- end main-header  -->

    @yield('content')

    <!-- START FOOTER  -->

    <footer>

        <section class="footer-widget-area footer-widget-area-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="about-footer">

                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <img src="{{ asset('blood_donation/images/logo-footer.png') }}" alt="" />
                                </div> <!--  end col-lg-3-->

                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <p>
                                        We are world largest and trustful blood donation center. We have been working
                                        since 1973 with a prestigious vision to helping patient to provide blood.
                                        We are working all over the world, organizing blood donation campaign to grow
                                        awareness among the people to donate blood.
                                    </p>
                                </div> <!--  end .col-lg-9  -->

                            </div> <!--  end .row -->

                        </div> <!--  end .about-footer  -->

                    </div> <!--  end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="footer-widget">
                            <div class="sidebar-widget-wrapper">
                                <div class="footer-widget-header clearfix">
                                    <h3>Subscribe Us</h3>
                                </div>
                                <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                                <div class="footer-subscription">
                                    <p>
                                        <input id="mc4wp_email" class="form-control" required=""
                                            placeholder="Enter Your Email" name="EMAIL" type="email">
                                    </p>
                                    <p>
                                        <input class="btn btn-default" value="Subscribe Now" type="submit">
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!--  end .col-md-4 col-sm-12 -->

                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="footer-widget">

                            <div class="sidebar-widget-wrapper">

                                <div class="footer-widget-header clearfix">
                                    <h3>Contact Us</h3>
                                </div> <!--  end .footer-widget-header -->


                                <div class="textwidget">

                                    <i class="fa fa-envelope-o fa-contact"></i>
                                    <p><a href="#">support@donation.com</a><br /><a
                                            href="#">helpme@donation.com</a></p>

                                    <i class="fa fa-location-arrow fa-contact"></i>
                                    <p>Road-2,3/A East Shibgonj<br />Sylhet-3100, Bangladesh</p>

                                    <i class="fa fa-phone fa-contact"></i>
                                    <p>Office:&nbsp; (+880) 0823 560 433<br />Cell:&nbsp; (+880) 0723 161 343</p>

                                </div>

                            </div> <!-- end .footer-widget-wrapper  -->

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .col-md-4 col-sm-12 -->

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="footer-widget clearfix">

                            <div class="sidebar-widget-wrapper">

                                <div class="footer-widget-header clearfix">
                                    <h3>Support Links</h3>
                                </div> <!--  end .footer-widget-header -->


                                <ul class="footer-useful-links">

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Thalassemia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Cell Elofrosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Myelodysasia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Blood Count
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Hemolytimia
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Ychromas Eosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Hyrcoagulable
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Thrombo Xtosis
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Sicklenemiaxs
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-caret-right fa-footer"></i>
                                            Aplastic Anemia
                                        </a>
                                    </li>

                                </ul>

                            </div> <!--  end .footer-widget  -->

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .col-md-4 col-sm-12 -->

                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .footer-widget-area  -->

        <!--FOOTER CONTENT  -->

        <section class="footer-contents">

            <div class="container">

                <div class="row clearfix">

                    <div class="col-md-6 col-sm-12">
                        <p class="copyright-text"> Copyright © 2017, All Right Reserved - by xenioushk </p>

                    </div> <!-- end .col-sm-6  -->

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Causes</a>
                                    </li>
                                    <li>
                                        <a href="donate.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="blog-with-sidebar.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="campaign-grid.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!--  end .footer-nav  -->
                    </div> <!--  end .col-lg-6  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .footer-content  -->

    </footer>

    <!-- END FOOTER  -->

    <!-- Back To Top Button  -->

    <a id="backTop">Back To Top</a>

    <script src="{{ asset('blood_donation/js/jquery.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/wow.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/jquery.backTop.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/venobox.min.js') }}"></script>
    <script src="{{ asset('blood_donation/js/custom-scripts.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    {{-- toster --}}
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    {{-- tostet --}}
    {!! Toastr::message() !!}
</body>


</html>
