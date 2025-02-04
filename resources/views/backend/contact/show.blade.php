@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Message Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h5 class="mb-1"><strong>Name:</strong></h5>
                                    <p class="mb-0">{{ $contact->name }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1"><strong>Email:</strong></h5>
                                    <p class="mb-0">{{ $contact->email }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1"><strong>Subject:</strong></h5>
                                    <p class="mb-0">{{ $contact->subject }}</p>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1"><strong>Message:</strong></h5>
                                    <p class="mb-0">{{ $contact->message }}</p>
                                </div>
                            </div>
                            <div class="mt-3 text-end">
                                <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
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
