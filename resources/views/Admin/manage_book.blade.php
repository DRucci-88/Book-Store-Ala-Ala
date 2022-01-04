@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form>
                    <div class="card">
                        <div class="card-body">
                            <h3>Insert Book Form</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Author</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="author">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Synopsis</label>
                                <div class="col-sm-6">
                                    <textarea type="text" class="form-control" name="synopsis"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Genre(s)</label>
                                <div class="row col-sm-6">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="valueOfCheckbox">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Price</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Cover</label>
                                <div class="col-sm-6">
                                    <img class="img-thumbnail" src="..." alt="Book Title Cover">
                                    <input type="file" class="form-control" name="cover">
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
                            <th scope="col">Author</th>
                            <th scope="col">Synopsis</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Buku1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>IDR 1000</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-secondary" type="button">View Detail</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Buku2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>IDR 1000</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-secondary" type="button">View Detail</button>
                                    <button class="btn btn-danger" type="button">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Buku3</td>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>@twitter</td>
                            <td>IDR 1000</td>
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