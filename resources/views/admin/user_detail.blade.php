@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form action="/user/{{ $user->id }}/admin" method="POST">
                            @csrf
                            <h3>{{ $user->name }}'s User Detail</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Role</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="role" required>
                                        <option value="Admin" {{ $user->role->id === 1 ? 'selected' : '' }}>Admin</option>
                                        <option value="Member" {{ $user->role->id === 2 ? 'selected' : '' }}>Member</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary col-sm-4">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
