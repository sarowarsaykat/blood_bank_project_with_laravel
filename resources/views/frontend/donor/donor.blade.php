@extends('layout.master')
@section('content')
    <!-- PAGE HEADING -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Donor Request
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="{{route('home')}}">Home</a> / Donor
                    </p>
                </div>
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </section> <!-- end .page-header -->

    <!-- CONTACT FORM SECTION -->
    <section class="section-content-block section-contact-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{route('donors.store')}}" method="POST" class="p-5 border rounded shadow bg-light">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="number" class="form-label">Phone Number:</label>
                            <input type="text" id="number" name="number" class="form-control"  placeholder="Enter phone number" required>
                            @error('number') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="blood_group" class="form-label">Blood Group:</label>
                            <select id="blood_group" name="blood_group" class="form-control" required>
                                <option value="">Select</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                            @error('blood_group') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="age" class="form-label">Age:</label>
                            <input type="number" id="age" name="age" class="form-control" " placeholder="Enter your age" required>
                            @error('age') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="last_donation_date" class="form-label">Last Donation Date:</label>
                            <input type="date" id="last_donation_date" name="last_donation_date" class="form-control">
                            @error('last_donation_date') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
