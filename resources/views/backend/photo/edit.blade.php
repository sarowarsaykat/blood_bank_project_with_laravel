@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Edit Photo</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('photos.update', $photo->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $photo->title }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Change Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>Current Image</label>
                                        <br>
                                        @if ($photo->image)
                                            <img src="{{ asset('uploads/photos/' . $photo->image) }}" width="75px"
                                                height="75px">
                                        @else
                                            <p>No image uploaded</p>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="is_active">
                                            <option value="1" {{ $photo->is_active ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$photo->is_active ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('photos.index') }}" class="btn btn-secondary">Cancel</a>
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
