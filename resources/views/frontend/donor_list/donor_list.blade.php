@extends('layout.master')
@section('content')
    <!-- PAGE HEADING -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Donor List
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / Donor List
                    </p>
                </div>
            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </section> <!-- end .page-header -->

    <section class="section-content-block section-our-team">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Donor List</h2>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

            <div class="row">
                <div class="col-md-12">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Blood Group</th>
                                <th scope="col">Age</th>
                                <th scope="col"> Last Donation Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donors as $donor)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$donor->name}}</td>
                                    <td>{{$donor->email}}</td>
                                    <td>{{$donor->number}}</td>
                                    <td>{{$donor->blood_group}}</td>
                                    <td>{{$donor->age}}</td>
                                    <td>{{ $donor->last_donation_date ? \Carbon\Carbon::parse($donor->last_donation_date)->format('d-m-Y') : 'N/A' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
