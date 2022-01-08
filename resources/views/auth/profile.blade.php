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
        <form action="" method="post">
          @csrf
          <div class="card">
            <div class="card-body">
              <h3>Profile</h3>
              <div class="row mb-3">
                <label class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
                </div>
              </div>
              <div class="row mb-3">
                <p class="col-sm-6 col-form-label">Email</p>
                <div class="col-sm-6">
                  <label class="col-form-label">{{ auth()->user()->email }}</label>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-block">
                <a href="/" class="btn btn-primary">Back to Home</a>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/profile/password" class="btn btn-primary">Change Password</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
