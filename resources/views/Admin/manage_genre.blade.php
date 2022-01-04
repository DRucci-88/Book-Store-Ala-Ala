@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form>
                    <div class="card">
                        <div class="card-body">
                            <h3>Insert Genre Form</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-4">Insert</button>
                        </div>
                    </div>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Buku1</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-secondary" type="button">View Detail</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Buku2</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-secondary" type="button">View Detail</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Buku3</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-secondary" type="button">View Detail</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
