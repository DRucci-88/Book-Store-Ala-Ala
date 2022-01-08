@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                @if (session()->has('successMessage'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('successMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('errorMessage'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('errorMessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{route('update_password')}}" id="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h3>Change Password</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Old Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="********" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">New Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="********" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">New Confirmation Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="********" required>
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
