@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Blood Request</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            {{-- <th>Phone Number</th> --}}
                                            <th>Blood Group</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($bloodRequests as $bloodRequest)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $bloodRequest->name }}</td>
                                                <td>{{ $bloodRequest->email }}</td>
                                                {{-- <td>{{ $bloodRequest->number }}</td> --}}
                                                <td>{{ $bloodRequest->blood_group }}</td>
                                                <td>{{ $bloodRequest->quantity }}</td>
                                                <td>{{ $bloodRequest->date ? \Carbon\Carbon::parse($bloodRequest->date)->format('d-m-Y') : 'N/A' }}
                                                </td>
                                                <td>
                                                    <!-- Show Button -->
                                                    <a href="{{route('blood_requests.show', $bloodRequest->id)}}" class="btn btn-sm btn-warning"><i
                                                            class="fa-solid fa-eye"></i></a>

                                                    <!-- Delete Button -->
                                                    <form action="{{route('blood_requests.destroy', $bloodRequest->id)}}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this donor?')"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>

                                                    <!-- message donor -->
                                                    <a href="{{route('assign_donor')}}" class="btn btn-success btn-sm">Assign Donor</a>

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
