@extends('layout.master')
@section('content')
    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Event Single Page
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / <a href="#">Events</a> / Single Event
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">



                <div class="article-event clearfix">

                    <div class="col-sm-12">

                        <article class="post single-post-inner">

                            <div class="post-inner-featured-content">
                                <img alt="" src="{{ asset('blood_donation/images/event_single.jpg') }}">
                            </div>


                            <div class="single-post-inner-title">
                                <h2>International Blood Donation Day-2017</h2>
                                <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Deborah Beck &nbsp; &nbsp; <i
                                        class="fa fa-share"></i>&nbsp; Blood, Save Life</p>
                            </div>

                            <div class="single-post-inner-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis necessitatibus magni
                                    optio nobis dicta esse quas molestias deserunt et, sint fuga debitis asperiores dolorum
                                    illum soluta quae eos itaque nemo.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tenetur nulla
                                    consequatur. Facere eaque quod assumenda dolorem beatae, nulla et rem quisquam possimus
                                    vitae, commodi optio sunt fugit? Illo, itaque debitis. Amet, ex pariatur dolores
                                    cupiditate provident recusandae veritatis voluptatibus velit eius quos impedit nulla
                                    saepe iste dolor assumenda reprehenderit laborum itaque id. Voluptatum sit ipsam
                                    provident officiis, aspernatur aliquid.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa doloremque incidunt ad
                                    nobis quod natus, repudiandae suscipit iste error laudantium aperiam, quae, eum
                                    aspernatur hic facere officiis architecto totam quis ea nostrum consequuntur? Veniam qui
                                    ad tempore, dicta obcaecati veritatis eaque voluptatem saepe animi. Magnam nemo dolor
                                    excepturi eligendi, repellendus.</p>

                            </div>


                        </article> <!--  end single-post-container -->


                    </div> <!--  end .single-post-container -->

                    <div class="col-sm-4">

                        <h4 class="event-content-title">Details</h4>

                        <p class="event-content-info">

                            <span class="event-sub-content-title">Date: <em class="date">August 17, 2016</em></span>

                            <span class="event-sub-content-title">Cost:</span>
                            Free
                            <span class="event-sub-content-title">Event Category:</span>
                            <a href="#">Main Events</a>
                            <span class="event-sub-content-title">Website:</span>
                            <a href="#" title="www.codeecstasy.com ">http://www.codeecstasy.com </a>
                        </p>
                    </div> <!-- end .col-sm-4  -->

                    <div class="col-sm-4">

                        <h4 class="event-content-title">Organizer</h4>

                        <p class="event-content-info">
                            Blood Donation Center <br />
                            <span class="event-sub-content-title">Phone:</span>
                            01 4537 8639 243 <br />
                            <span class="event-sub-content-title">Email:</span>
                            <a href="#" title="info@codeecstasy.com">info@codeecstasy.com </a>
                            <span class="event-sub-content-title">Website:</span>
                            <a href="#" title="www.codeecstasy.com ">http://booking.codeecstasy.com </a>
                        </p>

                    </div> <!-- end .col-sm-4  -->

                    <div class="col-sm-4">

                        <h4 class="event-content-title">Venue</h4>

                        <p class="event-content-info">
                            Almond Street <br />
                            42 Almond St <br />
                            Laredo, TX 78041 United States + Google Map <br />
                            <span class="event-sub-content-title">Phone:</span>
                            01 8745 4362 329 <br />
                            <span class="event-sub-content-title">Website:</span>
                            <a href="#" title="www.codeecstasy.com ">http://venue.codeecstasy.com </a>
                        </p>


                    </div> <!-- end .col-sm-4  -->

                </div>

                <div class="article-author clearfix">

                    <div class="col-sm-12">

                        <div id="map_canvas"></div>

                    </div>

                </div>

            </div> <!--  end .row  -->


            <div class="row">

                <div class="article-author clearfix">

                    <div class="topic-bold-header clearfix">
                        <h4>Event Created by <a href="#">Deborah Beck</a></h4>
                    </div> <!-- end .topic-bold-header  -->

                    <figure class="author-avatar">
                        <a href="#">
                            <img src="{{ asset('blood_donation/images/user_1.jpg') }}" alt="Avatar">
                        </a>
                    </figure>

                    <div class="about_author">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Vestibulum tortor quam feugiat vitae ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                        quam egestas semper.
                    </div>

                    <div class="social-icons margin-top-11 clearfix">
                        <a class="fa fa-facebook social_icons" href="#" data-original-title="Facebook"></a>
                        <a class="fa fa-twitter social_icons" href="https://twitter.com/#"
                            data-original-title="Twitter"></a>
                        <a class="fa fa-flickr social_icons" href="http://www.flickr.com/photos/#"
                            data-original-title="Flickr"></a>
                        <a class="fa fa-youtube social_icons" href="http://www.youtube.com/#"
                            data-original-title="Youtube"></a>
                        <a class="fa fa-linkedin social_icons" href="#" data-original-title="Linkedin"></a>
                    </div>

                </div> <!-- end .article-author  -->

                <div class="post-nav-section clearfix">

                    <a class="btn btn-primary fr" href="#">Next Event <i class="fa fa-angle-double-right"></i></a>
                    <a class="btn btn-primary" href="#"><i class="fa fa-angle-double-left"></i> Previous Event</a>

                </div> <!-- end .post-nav-section  -->

            </div>

        </div> <!--  end container -->

    </section>
@endsection
