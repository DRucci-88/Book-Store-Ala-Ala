@extends('layouts.main')

@section('content')

    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $book->name }}'s Book Detail</h3>
                        <div class="row me-1">
                            <div class="col-sm-3 text-center mb-3">
                                <img class="img-fluid w-100" src="/books/top_one.jpg" alt="Book Title Cover">
                            </div>
                            <div class="col-sm-9">
                                <div class="row mb-3">
                                    <p class="col-sm-4">Name</p>
                                    <p class="col-sm-8">{{ $book->name }}</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Author</p>
                                    <p class="col-sm-8">{{ $book->author }}</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Synopsis</p>
                                    <p class="col-sm-8">{{ $book->synopsis }}</p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Genre</p>
                                    <p class="col-sm-8">
                                        @foreach ($book->genres as $genre)
                                            {{ $genre->name }}<?= $loop->last ? '' : ', ' ?>
                                        @endforeach
                                    </p>
                                </div>
                                <div class="row mb-3">
                                    <p class="col-sm-4">Price</p>
                                    <p class="col-sm-8">IDR {{ $book->price }}</p>
                                </div>
                                @auth
                                    <form action="/cart/{{ $book->id }}" method="POST" class="row justify-content-between">
                                        @csrf
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-text">Quantity</span>
                                                <input type="number" min="1" class="form-control" name="quantity" placeholder="e.g. 1" value="1" required>
                                            </div>
                                        </div>
                                        <div class="col-sm text-end">
                                            <button type="submit" class="btn btn-primary">Add to Cart/Update</button>
                                        </div>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
