@extends('layouts.main')

@section('content')
  <style>
    span {
      color: red;
    }
  </style>
  <div class="container my-5 flex-fill">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <form action="/admin/book" method="POST"
              enctype="multipart/form-data" onsubmit="convertGenreArr()">
          @csrf
          <div class="card">
            <div class="card-body">
              <h3>Insert Book Form</h3>
              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="name">
                  <span>{{ $errors->first('name') }}</span>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Author</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="author">
                  <span>{{ $errors->first('author') }}</span>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Synopsis</label>
                <div class="col-sm-6">
                  <textarea type="text" class="form-control" name="synopsis"></textarea>
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
                  <input type="number" class="form-control" name="price">
                  <span>{{ $errors->first('price') }}</span>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-5 col-form-label">Cover</label>
                <div class="col-sm-6">
                  <input type="file" class="form-control" name="cover">
                  <span>{{ $errors->first('cover') }}</span>
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
          @foreach( $books as $book )
            <tr>
              <td>{{ $book->name }}</td>
              <td>{{ $book->author }}</td>
              <td>{{ $book->synopsis }}</td>
              <td>
                @foreach( $book->genres as $genre)
                  {{ $genre->name }}
                @endforeach
              </td>
              <td>Rp. {{ $book->price }}</td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <a href="/book/{{ $book->id }}/admin" class="btn btn-secondary">View Detail</a>
                  <form action="/book/{{ $book->id }}/admin" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>

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
