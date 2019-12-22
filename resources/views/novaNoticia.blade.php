@extends('layouts.app')
@section('conteudo')
<div class="container">
    <form method="post" action="/noticia/salvar">
        {{csrf_field()}}
        <h3>Nova notícia</h3>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="titulo" required>
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea id="texto" name="texto" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" class="form-control" placeholder="autor" required>
        </div>
        <div class="form-group">
            <div class="text-center">Visível</div>
            <input type="checkbox" id="visivel" name="visivel" class="form-control" checked>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection
