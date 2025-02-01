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
                               <form action="">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Multiple</label>
                                      <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                              style="width: 100%;">
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                      <label>Disabled Result</label>
                                      <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option disabled="disabled">California (disabled)</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                    </div>
                                    <!-- /.form-group -->
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
