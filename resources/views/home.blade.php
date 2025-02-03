@extends('layout.master')
@section('content')
    <!--  HOME 2 BANNER BLOCK  -->

    <section class="section-banner">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="banner-content">
                        <h2>
                            Donate blood and get real blessings.
                        </h2>
                        <h3>Blood is the most precious gift that anyone can give to another person.<br>
                            Donating blood not only saves the life also save donor's lives.
                        </h3>
                        <a href="{{ route('donors.create') }}" class="btn btn-slider">Blood Donors Request</a>
                    </div>
                </div> <!-- end .col-md-12  -->
            </div>
        </div>
    </section>

    <!--  SECTION DONATION PROCESS -->

    <section class="section-content-block section-process">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading"><span>Donation</span> Process</h2>
                    <p class="section-subheading">The donation process from the time you arrive center until the time
                        you leave</p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->

            <div class="row wow fadeInUp">
                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="{{ asset('blood_donation/images/process_1.jpg') }} " alt="service" />
                            <div class="step">
                                <h3>1</h3>
                            </div>
                        </figure> <!-- end .cause-img  -->
                        <article class="process-info">
                            <h2>Registration</h2>
                            <p>You need to complete a very simple registration form. Which contains all required contact
                                information to enter in the donation process.</p>
                        </article>
                    </div> <!--  end .process-layout -->
                </div> <!--  end .col-lg-3 -->



                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="{{ asset('blood_donation/images/process_2.jpg') }}" alt="process" />
                            <div class="step">
                                <h3>2</h3>
                            </div>
                        </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                        <article class="process-info">
                            <h2>Screening</h2>
                            <p>A drop of blood from your finger will take for simple test to ensure that your blood iron
                                levels are proper enough for donation process.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->


                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="{{ asset('blood_donation/images/process_3.jpg') }}" alt="process" />
                            <div class="step">
                                <h3>3</h3>
                            </div>
                        </figure> <!-- end .cause-img  -->

                        <article class="process-info">
                            <h2>Donation</h2>
                            <p>After ensuring and passed screening test successfully you will be directed to a donor bed
                                for donation. It will take only 6-10 minutes.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->

            </div> <!--  end .row -->

        </div> <!--  end .container  -->

    </section> <!--  end .section-process -->


    <!--Volunteers SECTION -->

    <section class="section-content-block section-secondary-bg section-our-team">

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
                @foreach ($volunteers->take(3) as $volunteer)
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

    <!--  CAMPAIGNS SECTION  -->

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
                        You can give blood at any of our blood donation venues all over the world. We have total sixty
                        thousands donor centers and visit thousands of other venues on various occasions.
                    </p>
                    <a class="btn btn-cta-2" href="{{route('about_us')}}">BECOME VOLUNTEER</a>
                </div> <!--  end .col-md-8  -->
            </div> <!--  end .row  -->
        </div>
    </section>

    <!--  APPOINTMENT SECTION -->

    <section class="section-appointment">

        <div class="container wow fadeInUp">

            <div class="row">

                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

                    <figure class="appointment-img">
                        <img src="{{ asset('blood_donation/images/appointment.jpg') }}" alt="appointment image">
                    </figure>
                </div> <!--  end col-lg-6  -->


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="appointment-form-wrapper text-center clearfix">
                        <h3 class="join-heading">Blood Request</h3>
                        <form action="{{ route('blood_requests.store') }}" class="appoinment-form row" method="POST">
                            @csrf
                            <div class="form-group col-md-6">
                                <input id="your_name" class="form-control" name="name" placeholder="Name"
                                    type="text" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_email" class="form-control" name="email" placeholder="Email"
                                    type="email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_phone" class="form-control" name="phone" placeholder="Phone"
                                    type="text" required>
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select-style">
                                    <select class="form-control" name="blood_group" required>
                                        <option value="">Select Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                @error('blood_group')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="donation_center" id="donation_center"
                                    placeholder="Donation Center" required>
                                @error('donation_center')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_quantity" class="form-control" name="quantity" placeholder="Quantity"
                                    type="number" min="1" required>
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_date" class="form-control" name="date" placeholder="Date"
                                    type="date" required>
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input id="your_time" class="form-control" name="time" placeholder="Time"
                                    type="time" required>
                                @error('time')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="textarea_message" class="form-control" name="reason" rows="4" placeholder="Reason for Request"
                                    required></textarea>
                                @error('reason')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <button id="btn_submit" class="btn btn-primary w-100" type="submit">Submit Blood
                                    Request</button>
                            </div>
                        </form>
                    </div> <!-- end .appointment-form-wrapper  -->

                </div> <!--  end .col-lg-6 -->

            </div> <!--  end .row  -->

        </div> <!--  end .container -->

    </section> <!--  end .appointment-section  -->

    <!--  GALLERY CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Photo Gallery</h2>
                    <p class="section-subheading">Campaign photos of different parts of world and our prestigious
                        voluntary work</p>
                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

        </div> <!--  end .container -->

        <div class="container-fluid wow fadeInUp">

            <div class="no-padding-gallery gallery-carousel">

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_1.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_1.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a> <!-- end .gallery-light-box  -->

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_2.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_2.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_3.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_3.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a> <!-- end .gallery-light-box  -->

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_4.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_4.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_5.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_5.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a> <!-- end .gallery-light-box  -->

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_6.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_6.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_7.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_8.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a> <!-- end .gallery-light-box  -->

                <a class="gallery-light-box xs-margin" data-gall="myGallery"
                    href="{{ asset('blood_donation/images/gallery_8.jpg') }}">

                    <figure class="gallery-img">

                        <img src="{{ asset('blood_donation/images/gallery_7.jpg') }}" alt="gallery image" />

                    </figure> <!-- end .cause-img  -->

                </a>

            </div> <!-- end .row  -->

        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->
@endsection
