@extends('layouts.main')

@section('content')

  <div class="container my-5 flex-fill">
    <div class="row justify-content-center">
      <div class="col-md-11">
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
                <a href="/" class="btn btn-secondary">Back to Home</a>
                <button type="submit" class="btn btn-secondary">Update</button>
                <a href="/profile/password" class="btn btn-secondary">Change Password</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
