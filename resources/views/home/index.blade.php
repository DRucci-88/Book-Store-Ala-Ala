@extends('layouts.main')

@section('content')

    {{ auth()->user() }}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 my-5">
                <form action="/" class="d-flex justify-content-between mb-3">
                    <label class="col me-3">
                        <input type="text" class="form-control" name="search" placeholder="Search for a book name">
                    </label>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <a href="/" class="btn btn-primary">Clear Filter</a>

                <div class="d-flex justify-content-between mt-3">
                    @foreach ($books as $book)
                        <div class="card col-md-2">
                            <div class="card-body d-flex flex-column">
                                <img src="/books/{{ $book->cover }}" class="card-img-top" alt="{{ $book->name }}">
                                <h5 class="card-title fw-bold mt-1" style="min-height: 3rem;">{{ $book->name }}</h5>
                                <p class="card-text mb-0">By: {{ $book->author }}</p>
                                <p class="card-text">IDR {{ $book->price }}</p>
                                <a href="/book/{{ $book->id }}" class="btn btn-primary mt-auto">
                                    <i class="bi-info-circle-fill"></i>
                                    View details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <nav>
                    <ul class="pagination justify-content-center mt-3">
                        {{ $books->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection