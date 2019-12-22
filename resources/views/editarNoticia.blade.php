@extends('layouts.app')
@section('conteudo')
<div class="container">
    <form method="post" action="/noticia/editar/{{$data->id_noticia}}">
        {{csrf_field()}}
        <h3>Editar notícia</h3>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{$data->titulo}}" required>
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" class="form-control" rows="5" required>{{$data->texto}}</textarea>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" value="{{$data->autor}}" required>
        </div>
        <div class="form-group">
            <div class="text-center">Visível</div>
            @if ($data->visivel == 1)
            <input type="checkbox" id="visivel" name="visivel" class="form-control" checked>
            @else
            <input type="checkbox" id="visivel" name="visivel" class="form-control" unchecked>
            @endif
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>
@endsection
