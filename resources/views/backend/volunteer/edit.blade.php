@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit Volunteer</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('volunteers.update', $volunteer->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $volunteer->name }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" value="{{ $volunteer->position }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $volunteer->facebook }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="x">X (Twitter) Link</label>
                                        <input type="url" class="form-control" id="x" name="x" value="{{ $volunteer->x }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $volunteer->instagram }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn Link</label>
                                        <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ $volunteer->linkedin }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Upload New Image (Optional)</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if ($volunteer->image)
                                            <img src="{{ asset('uploads/volunteers/' . $volunteer->image) }}" alt="Volunteer Image" width="100">
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="is_active" class="form-label">Is Active</label>
                                        <select name="is_active" id="is_active" class="form-control" required>
                                            <option value="1" {{ $volunteer->is_active ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ !$volunteer->is_active ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('volunteers.index') }}" class="btn btn-secondary">Cancel</a>
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
