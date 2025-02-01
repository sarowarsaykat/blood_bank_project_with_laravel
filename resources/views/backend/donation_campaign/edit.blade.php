@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit Donation Campaign</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">

                                @if (session('success'))
                                    <script>
                                        toastr.success("{{ session('success') }}");
                                    </script>
                                @endif
                                @if (session('error'))
                                    <script>
                                        toastr.error("{{ session('error') }}");
                                    </script>
                                @endif

                                <form action="{{ route('donation_campaigns.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $campaign->title }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" required>{{ $campaign->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ $campaign->date }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="start_time">Start Time</label>
                                        <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $campaign->start_time }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="end_time">End Time</label>
                                        <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $campaign->end_time }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location" name="location" value="{{ $campaign->location }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Upload New Image (Optional)</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if ($campaign->image)
                                            <img src="{{ asset('uploads/campaigns/' . $campaign->image) }}" alt="Campaign Image" width="100" class="mt-2">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="is_active">Is Active</label>
                                        <select name="is_active" id="is_active" class="form-control" required>
                                            <option value="1" {{ $campaign->is_active ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ !$campaign->is_active ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update Campaign</button>
                                    <a href="{{ route('donation_campaigns.index') }}" class="btn btn-secondary">Cancel</a>
                                </form>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
