@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form>
                    <div class="card">
                        <div class="card-body">
                            <h3>Change Password</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Old Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="oldPassword" placeholder="********">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">New Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="newPassword" placeholder="********">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">New Confirmation Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="confirmPassword" placeholder="********">
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
