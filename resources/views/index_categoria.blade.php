@extends('layouts.app')
@section('content')
    <div class="jumbotron bg-ligth border border-secondary">
        <div class="row">
            <div class="card-deck">
                <h1>Pagina de Categorias</h1>
                @foreach($categorias as $cat)
                    <p>{{$cat->nome}}</p>
                @endforeach
            </div>
        </div>
    </div>    
@endsection
