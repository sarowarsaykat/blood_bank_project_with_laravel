@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container">
            <div class="card border-0 shadow-lg rounded-lg">
                <div class="card-header bg-danger text-white text-center">
                    <h3 class="card-title"><i class="fas fa-tint"></i> Blood Request Details</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-user"></i> Name:</strong> {{ $bloodRequest->name }}</p>
                            <p><strong><i class="fas fa-envelope"></i> Email:</strong> {{ $bloodRequest->email }}</p>
                            <p><strong><i class="fas fa-phone"></i> Phone:</strong> {{ $bloodRequest->phone }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-tint"></i> Blood Group:</strong> 
                                <span class="badge bg-danger">{{ $bloodRequest->blood_group }}</span>
                            </p>
                            <p><strong><i class="fas fa-hospital"></i> Donation Center:</strong> {{ $bloodRequest->donation_center }}</p>
                            <p><strong><i class="fas fa-weight"></i> Quantity:</strong> {{ $bloodRequest->quantity }} Units</p>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="row">
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-calendar"></i> Date:</strong> 
                                {{ $bloodRequest->date ? \Carbon\Carbon::parse($bloodRequest->date)->format('d-m-Y') : 'N/A' }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-clock"></i> Time:</strong> 
                                {{ $bloodRequest->time ? \Carbon\Carbon::parse($bloodRequest->time)->format('h:i A') : 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p><strong><i class="fas fa-info-circle"></i> Reason:</strong> {{ $bloodRequest->reason }}</p>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('blood_requests.index') }}" class="btn btn-dark btn-sm px-4">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
