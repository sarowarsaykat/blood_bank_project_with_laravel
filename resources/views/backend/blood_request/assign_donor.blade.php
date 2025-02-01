@extends('layout.backendMaster')
@section('contentBackend')
    <div class="content-wrapper">

        <!-- form start-->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Blood Request</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="{{ route('assign_donor.update', $blood_request->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Donor</label>
                                            <select class="select2bs4" multiple="multiple" name="assign_donors[]"
                                                style="width: 100%;">
                                                @foreach ($donors as $donor)
                                                    <option value="{{ $donor->id }}">
                                                        {{ $donor->name }}&nbsp;&nbsp;({{ $donor->blood_group }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
