@extends('layouts.adminLayout.adminDesign')
@section('content')
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Password Settings</h4>
                                    <div class="form-group row">
                                        <label for="OldPass" class="col-sm-3 text-right control-label col-form-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="OldPass" placeholder="Old Password" required="">
                                            <span id="chkPass"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="NewPass" class="col-sm-3 text-right control-label col-form-label">New Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="NewPass" placeholder="New Password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ConPass" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="ConPass" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                
                            </form>
@endsection 