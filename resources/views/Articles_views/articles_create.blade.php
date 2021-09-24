@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class='container'>
    <form action=""method="post">
        @csrf
        
        <div class="form-group d-flex align-items-center">
            <label for="title">Inserisci titolo: </label>
            
            <textarea name="title" id="title" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="description">Description: </label>
            
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group d-flex align-items-center">
            <label for="immagine">Immagine: </label>
            <textarea placeholder="Inserici un l'indirizzo https dell'immagine " name="image" id="immagine" cols="30" rows="10"></textarea>
        </div>
        
        <br>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection