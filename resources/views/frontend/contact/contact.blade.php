@extends('layout.master')
@section('content')
    <!--  PAGE HEADING -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Contact Us
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Contact
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->

    {{-- contact start --}}
    
    <section class="section-content-block section-contact-block">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-sm-8 wow fadeInLeft">
                    <div class="contact-form-block">
                        <h2 class="contact-title">Say hello to us</h2>
                        <form role="form" action="#" method="post" id="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="user_name"
                                    placeholder="Name" data-msg="Please Write Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="user_email"
                                    placeholder="Email" data-msg="Please Write Your Valid Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_subject" name="email_subject"
                                    placeholder="Subject" data-msg="Please Write Your Message Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="email_message" id="email_message" placeholder="Message"
                                    data-msg="Please Write Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom">Send Now</button>
                            </div>
                        </form>
                    </div> <!-- end .contact-form-block  -->
                </div> <!--  end col-sm-6  -->
            </div> <!-- end row  -->
        </div> <!--  end .container -->
    </section>
@endsection
