@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <form action="/genre/{genre_id}" method="POST">
                            @csrf
                            @method('PUT')
                            <h3>Novel's Genre Detail</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-4">Update</button>
                        </form>
                        <h3 class="mt-3">Book List</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Book1</td>
                                    <td>
                                        <a href="/book/{book_id}" class="btn btn-secondary">View Book Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Book2</td>
                                    <td>
                                        <a href="/book/{book_id}" class="btn btn-secondary">View Book Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Book3</td>
                                    <td>
                                        <a href="/book/{book_id}" class="btn btn-secondary">View Book Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Book4</td>
                                    <td>
                                        <a href="/book/{book_id}" class="btn btn-secondary">View Book Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
