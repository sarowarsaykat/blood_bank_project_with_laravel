@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Active Donor</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Blood Group</th>
                                            <th>Age</th>
                                            <th>Last Donation Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            use Carbon\Carbon;
                                        @endphp

                                        @forelse ($donors as $donor)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $donor->name }}</td>
                                                <td>{{ $donor->email }}</td>
                                                <td>{{ $donor->number }}</td>
                                                <td>{{ $donor->blood_group }}</td>
                                                <td>{{ $donor->age }}</td>

                                                <td>
                                                    {{ $donor->last_donation_date ? Carbon::parse($donor->last_donation_date)->format('d-m-Y') : 'N/A' }}
                                                </td>
                                                <td>
                                                    @if ($donor->status)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- Delete Button -->
                                                    <form action="{{ route('active_donors.destroy', $donor->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this active donor?')"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center">No donors found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
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
