@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form>
                    <div class="card">
                        <div class="card-body">
                            <h3> Member's User Detail</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Role</label>
                                <div class="col-sm-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Member</option>
                                        <option value="1">Member</option>
                                        <option value="2">Admin</option>

                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-6">Insert</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
