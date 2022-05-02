@extends('layouts.layouts')

@section('contentMain')
    <main>
        <div class="container-card">
            @foreach ($comics as $comic)
                
                <div class="wrapper-card">
                    <ul>
                        <li class="image-comics"><img src="{{$comic['thumb']}}" alt=""></li>
                        <li class="title">{{$comic['title']}}</li>
                        <li class="subtitle">{{$comic['price']}}$</li>
                        <li class="subtitle">{{$comic['series']}}</li>

                        <a href="{{ route('comics.show', $comic->id) }}">Visualizza</a>
                        <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    </ul>
                </div>
    
            @endforeach

            <a class="create" href="{{ route('comics.create') }}">Create</a>
        </div>
    </main>
@endsection