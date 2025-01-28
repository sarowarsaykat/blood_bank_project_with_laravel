@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Donor Request</h3>
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
                                            {{-- <th>Blood Group</th>
                                            <th>Age</th>
                                            <th>Last Donation Date</th> --}}
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($donors as $donor)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $donor->name }}</td>
                                                <td>{{ $donor->email }}</td>
                                                <td>{{ $donor->number }}</td>
                                                {{-- <td>{{ $donor->blood_group }}</td>
                                                <td>{{ $donor->age }}</td>
                                                <td>{{ $donor->last_donation_date ? \Carbon\Carbon::parse($donor->last_donation_date)->format('d-m-Y') : 'N/A' }}</td> --}}
                                                <td>
                                                    @if ($donor->status)
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-warning">Pending</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- Show Button -->
                                                    <a href="{{ route('donors.show', $donor->id) }}"
                                                        class="btn btn-sm btn-warning"><i class="fa-solid fa-eye"></i></a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ route('donors.destroy', $donor->id) }}" method="POST"
                                                        style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this donor?')"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                    @if ($donor->status == 0)
                                                        <!-- Show only if the donor is inactive -->
                                                        <form action="{{ route('donors.toggleStatus', $donor) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-success">Activate</button>
                                                        </form>
                                                    @endif
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
