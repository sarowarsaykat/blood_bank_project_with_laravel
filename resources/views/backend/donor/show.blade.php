@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Donor Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $donor->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $donor->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{ $donor->number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Blood Group</th>
                                        <td>{{ $donor->blood_group }}</td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td>{{ $donor->age }}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Donation Date</th>
                                        <td>{{ $donor->last_donation_date ? \Carbon\Carbon::parse($donor->last_donation_date)->format('d-m-Y') : 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if($donor->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <a href="{{ route('donors.index') }}" class="btn btn-primary btn-sm float-end">Back to List</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- form end-->

    </div>
@endsection
