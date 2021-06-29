@extends('layouts.main')

@section('content')

  <section class="container">

    <h1>Comics</h1>

    <section class="mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Publication Date</th>
            <th colspan="3" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic )
            <tr>
              <th>{{$comic->id}}</th>
              <th>{{$comic->title}}</th>
              <th>{{$comic->date}}</th>
              <th><a href="{{route('comics.show',$comic)}}" class="btn btn-outline-success">SHOW</a></th>
              <th><a class="btn btn-outline-dark" href="">EDIT</a></th>
              <th><a class="btn btn-outline-danger" href="">DELETE</a></th>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    </section>

    <section>
      {{$comics->links()}}
    </section>

  </section>

@endsection