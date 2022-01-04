@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form>
                        <h3> Novel's Genre Detail</h3>
                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary col-sm-6">Insert</button>
                        <h3> Book List</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Buku1</td>
                                <td>
                                    <div class=" d-md-block">
                                        <button class="btn btn-secondary" type="button">View Book Detail</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Buku2</td>
                                <td>
                                    <div class=" d-md-block">
                                        <button class="btn btn-secondary" type="button">View Book Detail</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Buku3</td>
                                <td>
                                    <div class=" d-md-block">
                                        <button class="btn btn-secondary" type="button">View Book Detail</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Buku4</td>
                                <td>
                                    <div class=" d-md-block">
                                        <button class="btn btn-secondary" type="button">View Book Detail</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
