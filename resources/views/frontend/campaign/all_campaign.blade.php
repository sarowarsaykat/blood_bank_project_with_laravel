@extends('layout.master')
@section('content')
            <!--  PAGE HEADING -->
            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h3>
                                Campaign Lists
                            </h3>
                            <p class="page-breadcrumb">
                                <a href="#">Home</a> / All Campaigns
                            </p>
                        </div>
                    </div> <!-- end .row  -->
                </div> <!-- end .container  -->
            </section> <!-- end .page-header  -->
            <!--  MAIN CONTENT  -->
    
            <!--  SECTION CAMPAIGNS   -->
            <section class="section-content-block">

                <div class="container">
        
                    <div class="row section-heading-wrapper">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading">Donation Campaigns</h2>
                            <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to
                                give blood.</p>
                        </div>
                    </div>
        
                    <div class="row">
                        <?php
                        $donation_campaigns = App\Http\Controllers\MyController::loadAllDonationCampaigns();
                        ?>
                        @foreach ($donation_campaigns as $campaign)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="event-latest d-flex align-items-center p-3 shadow-sm rounded bg-white">
                                    <div class="row w-100">
        
                                        <!-- Image Section -->
                                        <div class="col-lg-5 col-md-5 col-sm-4">
                                            <div class="event-latest-thumbnail">
                                                <a href="#">
                                                    <img src="{{ asset($campaign->image ? 'uploads/campaigns/' . $campaign->image : 'blood_donation/images/default-event.jpg') }}"
                                                        alt="Campaign Image" class="img-fluid rounded"
                                                        style="width: 100%; height: 250px; object-fit: cover;">
                                                </a>
                                            </div>
                                        </div>
        
                                        <!-- Content Section -->
                                        <div class="col-lg-7 col-md-7 col-sm-8">
                                            <div class="event-details">
                                                <a class="latest-date text-danger font-weight-bold" href="#">
                                                    {{ \Carbon\Carbon::parse($campaign->date)->format('d M, Y') }}
                                                </a>
                                                <h4 class="event-latest-title mt-2">
                                                    <a href="#" class="text-dark font-weight-bold">{{ $campaign->title }}</a>
                                                </h4>
                                                <p class="text-muted">
                                                    {{ Str::limit($campaign->description, 80, '...') }}
                                                </p>
                                                <div class="event-latest-details d-flex flex-wrap align-items-center">
                                                    <a class="author text-dark mr-3">
                                                        <i class="fa fa-clock-o"></i>
                                                        {{ \Carbon\Carbon::parse($campaign->start_time)->format('h:i A') }} -
                                                        {{ \Carbon\Carbon::parse($campaign->end_time)->format('h:i A') }}
                                                    </a>
                                                    <a class="comments text-dark">
                                                        <i class="fa fa-map-marker"></i> {{ $campaign->location }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
        
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                            <a class="btn btn-load-more" href="#">Load All Campaigns</a>
                        </div>
                    </div>
        
                </div> <!--  end .container  -->
        
            </section>
    
            <!-- SECTION CTA  -->   
            <section class="cta-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <h2>We are helping people from 40 years</h2>
                            <p>
                                You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                            </p>
                            <a class="btn btn-cta-2" href="#">BECOME VOLUNTEER</a>
                        </div> <!--  end .col-md-8  -->
                    </div> <!--  end .row  -->
                </div>
            </section> 
    
            <!-- CLIENT LOGO SECTION  -->
            <section class="section-client-logo section-secondary-bg">
                <div class="container wow fadeInUp">
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
@endsection