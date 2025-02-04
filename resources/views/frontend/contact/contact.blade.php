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
                        <form role="form" action="{{ route('contact.store') }}" method="post" class="contact-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                    data-msg="Please Write Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message"></textarea>
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
