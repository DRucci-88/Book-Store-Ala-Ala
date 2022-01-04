@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
    <form>
        <div class="card">
            <div class="card-body">
        <h3> Insert Book Form</h3>
        <div class="row mb-3">
            <label class="col-sm-6 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-6 col-form-label">Author</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-6 col-form-label">Synopsis</label>
            <div class="col-sm-6">
                <textarea type="text" class="form-control" ></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-6 col-form-label">Genre(s)</label>
            <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" >
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" >
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" >
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
            </div>
        </div>
            <div class="row mb-3">
                <label class="col-sm-6 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="input-group mb-3">
                <label class="col-sm-6 ">Cover</label>
                <div class="col-sm-6">
                <input type="file" class="form-control" >
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
            </div>
        </div>
    </div>

@endsection
