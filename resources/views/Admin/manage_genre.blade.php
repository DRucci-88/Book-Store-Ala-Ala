@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form action="/genre" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h3>Insert Genre Form</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name">
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
                            <td>Genre1</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/genre/{genre_id}" class="btn btn-secondary">View Detail</a>
                                    <form action="/genre/{genre_id}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Genre2</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/genre/{genre_id}" class="btn btn-secondary">View Detail</a>
                                    <form action="/genre/{genre_id}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Genre3</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/book/{book_id}" class="btn btn-secondary">View Detail</a>
                                    <form action="/book/{book_id}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
