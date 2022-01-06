@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <h3>Asdfghjkl's Book Detail</h3>
                        <div class="row me-1">
                            <div class="col-sm-3 text-center mb-3">
                                <img class="img-fluid w-100" src="/books/top_one.jpg" alt="Book Title Cover">
                            </div>
                            <div class="col-sm-9">
                                <div class="row mb-3">
                                    <p class="col-sm-4">Name</p>
                                    <p class="col-sm-8">Educated</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Author</p>
                                    <p class="col-sm-8">Tara Westover</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Synopsis</p>
                                    <p class="col-sm-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque quasi numquam earum excepturi, saepe asperiores maxime. Veritatis hic modi, commodi nobis, alias reprehenderit a illo autem culpa corporis, optio earum.</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Genre</p>
                                    <p class="col-sm-8">Education</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Price</p>
                                    <p class="col-sm-8">IDR 50000</p>
                                </div>
                                <form action="/cart/{item_id}" class="row justify-content-between">
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <span class="input-group-text">Quantity</span>
                                            <input type="number" class="form-control" name="quantity" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="col-sm text-end">
                                        <button type="submit" class="btn btn-primary">AddToCart/Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
