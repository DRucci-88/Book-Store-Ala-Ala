{{--@dd($test)--}}

@foreach($test as $book)
  <h3>{{ $book->name }} , Author {{ $book->author }}</h3>
  <ul>
    @foreach($book->genres as $genre)
      <li>{{ $genre->name }}</li>
    @endforeach
  </ul>

@endforeach
{{--@foreach($test->genres as $genre)--}}
{{--  <p>{{ $genre->name }}</p>--}}
{{--@endforeach--}}