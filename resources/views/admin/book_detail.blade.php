@extends('layouts.main')

@section('content')

  {{--  ADMIN--}}

  <div class="container my-5 flex-fill">
    <div class="row justify-content-center">
      <div class="col-md-11">
        
        <form action="/book/{{ $book->id }}/admin" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="card">
            <div class="card-body">
              <h3>{{ $book->name }}'s Book Detail</h3>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input value="{{ $book->name }}" type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Author</label>
                <div class="col-sm-6">
                  <input value="{{ $book->author }}" type="text" class="form-control" name="author">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Synopsis</label>
                <div class="col-sm-6">
                  <textarea type="text" class="form-control" name="synopsis">{{ $book->synopsis }}</textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Genre(s)</label>
                <div class="row">
                  @foreach($genres as $genre)
                    <div class="col">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="genres" value="value_of_checkbox">
                        <label class="form-check-label" for="gridCheck1">
                          {{ $genre->name }}
                        </label>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Price</label>
                <div class="col-sm-6">
                  <input value="{{ $book->price }}" type="number" class="form-control" name="price">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Old Cover</label>
                <div class="col-sm-6">
                  <img class="img-fluid mb-3" src="/books/{{ $book->cover }}" alt="Book Title Cover">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">New Cover</label>
                <div class="col-sm-6">
                  <input type="file" class="form-control" name="cover">
                </div>
              </div>
              {{-- Hidden Input--}}
              <input value="{{ $book->cover }}" name="oldCover" hidden>
              <button type="submit" class="btn btn-primary col-sm-4">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
