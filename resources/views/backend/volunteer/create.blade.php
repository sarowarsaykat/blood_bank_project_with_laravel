@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Blood Request</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('volunteers.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter position" required>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook profile link">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="x">X (Twitter) Link</label>
                                        <input type="url" class="form-control" id="x" name="x" placeholder="Enter X (Twitter) profile link">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="url" class="form-control" id="instagram" name="instagram" placeholder="Enter Google profile link">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn Link</label>
                                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="Enter LinkedIn profile link">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Upload Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label for="is_active" class="form-label">Is Active</label>
                                            <select name="is_active" id="is_active" class="form-control" required>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                    </div>
            
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
