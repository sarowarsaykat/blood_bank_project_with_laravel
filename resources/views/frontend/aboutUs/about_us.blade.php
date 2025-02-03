@extends('layout.master')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header">

        <div class="container">

            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        About Us
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / About Us
                    </p>
                </div>
            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!-- TEAM SECTION -->

    <section class="section-content-block section-our-team">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Volunteers</h2>
                    <p class="section-subheading">The volunteers who give their time and talents help to fulfill our
                        mission.</p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

            <div class="row">
                <?php
                $volunteers = App\Http\Controllers\MyController::loadAllVolunteer();
                ?>
                @foreach ($volunteers as $volunteer)
                    <div
                        class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">

                            <figure class="team-member">
                                <a href="#" title="{{ $volunteer->name }}">
                                    @if ($volunteer->image)
                                        <img src="{{ asset('uploads/volunteers/' . $volunteer->image) }}"
                                            alt="{{ $volunteer->name }}" class="img-fluid"
                                            style="width:270px; height:330px; object-fit:cover; border-radius:10px;" />
                                    @else
                                        <img src="{{ asset('blood_donation/images/default-avatar.jpg') }}"
                                            alt="Default Image" />
                                    @endif
                                </a>
                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>{{ $volunteer->name }}</h3>
                                <h4>{{ $volunteer->position }}</h4>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    @if ($volunteer->facebook)
                                        <a class="fa fa-facebook rectangle" href="{{ $volunteer->facebook }}"
                                            target="_blank" title="Facebook"></a>
                                    @endif

                                    @if ($volunteer->x)
                                        <a class="fa fa-twitter rectangle" href="{{ $volunteer->x }}" target="_blank"
                                            title="Twitter"></a>
                                    @endif

                                    @if ($volunteer->instagram)
                                        <a class="fa fa-instagram rectangle" href="{{ $volunteer->instagram }}"
                                            target="_blank" title="Instagram"></a>
                                    @endif

                                    @if ($volunteer->linkedin)
                                        <a class="fa fa-linkedin rectangle" href="{{ $volunteer->linkedin }}"
                                            target="_blank" title="LinkedIn"></a>
                                    @endif
                                </div>
                                <!-- end .author-social-box  -->

                            </div>

                        </div> <!--  end team-layout-1 -->

                    </div>
                @endforeach
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!--  end .section-our-team -->



    <!--  SECTION COUNTER   -->
    <section class="section-counter">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">

                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4>Success Smile</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">3235</span>
                        <h4>Happy Donors</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4>Happy Recipient</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-building icon"></i>
                        <span class="counter">1364</span>
                        <h4>Total Awards</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
            </div> <!-- end row  -->
        </div> <!--  end .container  -->
    </section> <!--  end .section-counter -->

    <!-- CLIENT LOGO SECTION  -->
    <section class="section-client-logo">
        <div class="container wow fadeInUp">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Sponsors</h2>
                    <p class="section-subheading">The sponsors who give their valuable amount to fulfill our mission.</p>
                </div> <!-- end .col-sm-10  -->
            </div> <!-- end .row  -->
            <div class="row">
                <div class="logo-items logo-layout-1 text-center">
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_1.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_2.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_3.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_4.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_5.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_6.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_7.jpg') }}" alt="" />
                    </div>
                    <div class="client-logo">
                        <img src="{{ asset('blood_donation/images/logo_8.jpg') }}" alt="" />
                    </div>
                </div> <!-- end .testimonial-container  -->
            </div> <!-- end row  -->
        </div> <!-- end .container  -->
    </section> <!--  end .section-client-logo -->

    <!-- CLIENT TESTIMONIAL SECTION  -->

    <section class="section-content-block section-client-testimonial">
        <div class="container">
            <div class="testimonial-container text-center">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Donor Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I proudly donate blood on a regular basis because it gives others something they desperately
                            need to survive. Just knowing I can make a difference in someone else’s life makes me feel
                            great!
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>
                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>
                    </div> <!-- end .testimony-layout-1  -->
                </div> <!--  end col-md-10  -->
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Donor Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I have been a donor since high school. Although I have not been a donor every year, I always
                            want to give to the human race. I love to help others! Moreover it gives a real peace in my
                            mind.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>
                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>
                    </div> <!-- end .testimony-layout-1  -->
                </div> <!--  end col-md-10  -->
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Recipient Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life.
                            We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>
                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>
                    </div> <!-- end .testimony-layout-1  -->
                </div> <!--  end col-md-10  -->
            </div> <!--  end .row  -->
        </div> <!-- end .container  -->
    </section> <!--  end .section-client-testimonial -->
@endsection
