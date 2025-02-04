@extends('layout.backendMaster')

@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <a href="{{ route('photos.create') }}" class="btn btn-primary mb-3">Upload New Photo</a>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Is Active</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($photos as $key => $photo)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $photo->title }}</td>
                                                <td><img src="{{ asset('uploads/photos/' . $photo->image) }}" width="60"
                                                        height="50px"></td>
                                                <td>{{ $photo->is_active ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('photos.edit', $photo->id) }}"
                                                        class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Are you sure?')"><i
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
