@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="/register" method="POST" class="card shadow col-sm-4">
                @csrf
                <div class="card-body">
                    <h2 class="mb-3">Register</h2>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-person"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi-lock"></i></span>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password">
                    </div>
                    <button class="btn btn-primary form-control mb-3">
                        <i class="bi-person-lines-fill me-1"></i>
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection