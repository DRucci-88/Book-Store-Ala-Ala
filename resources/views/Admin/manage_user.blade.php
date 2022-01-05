@extends('layouts.main')

@section('content')
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rucci</td>
                            <td>Rucci@mail.com</td>
                            <td>Admin</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="#" class="btn btn-secondary">View Detail</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Darren</td>
                            <td>Darren@mail.com</td>
                            <td>Member</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="#" class="btn btn-secondary">View Detail</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
