@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Donation Campaigns</h3>
                            <a href="{{ route('donation_campaigns.create') }}" class="btn btn-success float-right">+ Add New Campaign</a>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donation_campaigns as $key => $campaign)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $campaign->title }}</td>
                                                <td>{{ \Carbon\Carbon::parse($campaign->date)->format('d M, Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($campaign->start_time)->format('h:i A') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($campaign->end_time)->format('h:i A') }}</td>
                                                <td>{{ $campaign->location }}</td>
                                                <td>
                                                    @if ($campaign->image)
                                                        <img src="{{ asset('uploads/campaigns/' . $campaign->image) }}" alt="{{ $campaign->title }}" width="60" height="50px">
                                                    @else
                                                        <img src="{{ asset('blood_donation/images/default-campaign.jpg') }}" alt="Default Image" width="60">
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($campaign->is_active)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('donation_campaigns.edit', $campaign->id) }}" class="btn btn-warning btn-sm"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                    
                                                    <form action="{{ route('donation_campaigns.destroy', $campaign->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
