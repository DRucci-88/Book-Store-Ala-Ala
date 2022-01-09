@extends('layouts.main')

@section('content')

  {{--  ADMIN--}}

  <style>
    span{
      color: red;
    }
  </style>
  <div class="container my-5 flex-fill">
    <div class="row justify-content-center">
      <div class="col-md-11">

        @if ( session()->has('successMessage'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if ( session()->has('errorMessage'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('errorMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="/book/{{ $book->id }}/admin" method="POST"
              enctype="multipart/form-data" onsubmit="convertGenreArr()">
          @csrf

          <div class="card">
            <div class="card-body">
              <h3>{{ $book->name }}'s Book Detail</h3>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input value="{{ $book->name }}" type="text" class="form-control" name="name">
                  <span>{{ $errors->first('name') }}</span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Author</label>
                <div class="col-sm-6">
                  <input value="{{ $book->author }}" type="text" class="form-control" name="author">
                  <span>{{ $errors->first('author') }}</span>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Synopsis</label>
                <div class="col-sm-6">
                  <textarea type="text" class="form-control" name="synopsis">{{ $book->synopsis }}</textarea>
                  <span>{{ $errors->first('synopsis') }}</span>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Genre(s)</label>
                <div class="col-sm-4">
                  @foreach($genres as $genre)
                    <div class="form-group form-check" onclick="checkGenres({{ $genre->id }})">
                      <input class="form-check-input" type="checkbox"
                             value="{{ $genre->id }}" id="check{{ $genre->id }}">

                      <label class="form-check-label">
                        {{ $genre->name }}
                      </label>
                    </div>
                  @endforeach
                    <span>{{ $errors->first('genres') }}</span>
                </div>
              </div>

              Genre Input<input value="" type="text" id="genres" class="form-control" name="genres">

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Price</label>
                <div class="col-sm-6">
                  <input value="{{ $book->price }}" type="number" class="form-control" name="price">
                  <span>{{ $errors->first('price') }}</span>
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
                  <span>{{ $errors->first('cover') }}</span>
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

  <script>
      const genreInput = document.getElementById('genres');
      let genreArr = [];
      const checkGenres = (idGenre) => {
          const check = document.getElementById('check' + idGenre);
          if (genreArr.includes(idGenre) === false) {
              genreArr.push(idGenre);
              check.checked = true;
          } else {
              genreArr = arrayRemove(genreArr, idGenre);
              check.checked = false;
          }

          console.log(genreArr);
      }
      const convertGenreArr = () => {
          genreInput.value = genreArr.join('_');
      }
      // https://love2dev.com/blog/javascript-remove-from-array/#remove-from-array-splice-value
      const arrayRemove = (arr, value) => {
          return arr.filter((loop) => {
              return loop !== value;
          });
      }
  </script>
@endsection
