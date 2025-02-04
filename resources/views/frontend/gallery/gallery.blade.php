@extends('layout.master')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Gallery
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Gallery
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->

    <!--  GALLERY CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                    <p class="section-subheading">
                        Campaign photos of different parts of world and our prestigious voluntary work
                    </p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

        </div> <!--  end .container -->

        <div class="container wow fadeInUp">


            <div class="row no-padding-gallery">
                <?php
                $photos = App\Http\Controllers\MyController::loadAllPhoto();
                ?>
                @foreach ($photos as $photo)
                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery"
                            href="{{ asset('uploads/photos/' . $photo->image) }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('uploads/photos/' . $photo->image) }}" alt="{{ $photo->title }}" style="weight:250px; height: 250px;" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div>
                @endforeach

            </div> <!-- end .row  -->

        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->
@endsection
