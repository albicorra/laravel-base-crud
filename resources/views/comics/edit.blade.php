@extends('layouts.layouts')

@section('contentMain')
<form action="{{ route('comics.update', $comic) }}" method="post">
    @csrf
    @method('PUT');

    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{$comic->title}}"><br>

    <label for="description">Descrizione</label>
    <textarea name="description" id="" cols="30" rows="10">{{$comic->description}}</textarea><br>

    <label for="thumb">Immagine</label>
    <input type="text" name="thumb" value="{{$comic->thumb}}"><br>

    <label for="price">Prezzo</label>
    <input type="text" name="price" value="{{$comic->price}}"><br>

    <label for="series">Serie</label>
    <input type="text" name="series" value="{{$comic->series}}"><br>

    <label for="sale_date">In vendita dal</label>
    <input type="text" name="sale_date" value="{{$comic->sale_date}}"><br>

    <label for="type">Tipo</label>
    <input type="text" name="type" value="{{$comic->type}}"><br>

    <input type="submit" value="Invia"><br>

</form>

@endsection