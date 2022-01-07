@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="/login" method="POST" class="card shadow col-sm-4">
                @csrf
                <div class="card-body">
                    <h2 class="mb-3">Login</h2>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Remember me
                            </label>
                        </div>
                    </div>
                    {{ $errors }}
                    @error('errorMessage')
                        {{ $message }}
                    @enderror
                    <button class="btn btn-primary form-control mb-3">
                        <i class="bi-box-arrow-in-right me-1"></i>
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection