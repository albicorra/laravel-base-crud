
@extends('layouts.layouts')

@section('contentMain')
<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title"><br>

    <label for="description">Descrizione</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea><br>

    <label for="thumb">Immagine</label>
    <input type="text" name="thumb"><br>

    <label for="price">Prezzo</label>
    <input type="text" name="price"><br>

    <label for="series">Serie</label>
    <input type="text" name="series"><br>

    <label for="sale_date">In vendita dal</label>
    <input type="text" name="sale_date"><br>

    <label for="type">Tipo</label>
    <input type="text" name="type"><br>

    <input type="submit" value="Invia"><br>

</form>

@endsection