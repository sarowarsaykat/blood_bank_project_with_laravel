@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper mt-2" style="min-height: 100vh;">
        <div class="container">
            <div class="card border-0 shadow-lg rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="card-title"><i class="fas fa-user"></i> Donor Details</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-user"></i> Name:</strong> {{ $donor->name }}</p>
                            <p><strong><i class="fas fa-envelope"></i> Email:</strong> {{ $donor->email }}</p>
                            <p><strong><i class="fas fa-phone"></i> Phone:</strong> {{ $donor->number }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong><i class="fas fa-tint"></i> Blood Group:</strong> 
                                <span class="badge bg-danger">{{ $donor->blood_group }}</span>
                            </p>
                            <p><strong><i class="fas fa-calendar-alt"></i> Age:</strong> {{ $donor->age }} Years</p>
                            <p><strong><i class="fas fa-history"></i> Last Donation Date:</strong> 
                                {{ $donor->last_donation_date ? \Carbon\Carbon::parse($donor->last_donation_date)->format('d-m-Y') : 'N/A' }}
                            </p>
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="text-center">
                        <p><strong><i class="fas fa-info-circle"></i> Status:</strong> 
                            @if($donor->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </p>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('donors.index') }}" class="btn btn-dark btn-sm px-4">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
