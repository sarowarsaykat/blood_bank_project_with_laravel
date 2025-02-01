@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Volunteers List</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <a href="{{ route('volunteers.create') }}" class="btn btn-primary mb-3">Add Volunteer</a>
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Active</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($volunteers as $key => $volunteer)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    @if ($volunteer->image)
                                                        <img src="{{ asset('uploads/volunteers/' . $volunteer->image) }}" alt="Image" width="50" height="35px">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>
                                                <td>{{ $volunteer->name }}</td>
                                                <td>{{ $volunteer->position }}</td>
                                                <td>{{ $volunteer->is_active ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('volunteers.edit', $volunteer->id) }}" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen"></i></a>
                                                    <form action="{{ route('volunteers.destroy', $volunteer->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this volunteer?');"><i
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
