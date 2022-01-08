@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        @if ( session()->has('successMessage'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if ( session()->has('errorMessage'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('errorMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="/login" method="POST" class="card shadow p-3">
          @csrf
          <div class="card-body">
            <h2 class="mb-3">Login</h2>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi-envelope"></i></span>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="rememberMe">
                <label class="form-check-label">
                  Remember me
                </label>
              </div>
            </div>
            <button class="btn btn-primary form-control mb-3">
              <i class="bi-box-arrow-in-right me-1"></i>
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
