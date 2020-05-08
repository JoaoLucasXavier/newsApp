@extends('layouts.app')
@section('conteudo')
    @if (sizeof($data) == 0)
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="alert alert-danger text-center">Nenhuma notícia encontrada.</p>
            </div>
        </div>
    @else
        <hr>
        @foreach ($data as $item)
            @include('includes.linhaNoticia')
        @endforeach
        <hr>
    @endif
@endsection
