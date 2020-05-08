{{-- Pagina inicial do sistema - Apresenta as notícias caso exista --}}
@extends('layouts.app')

@section('conteudo')
@if (count($data) == 0)
{{-- não existe noticias --}}
<p class="alert alert-danger text-center">Nenhuma notícia encontrada.</p>
@else
{{-- apresentar a/as notícia/s existentes na base de dados --}}
<table class="table">
    <h4 class="col-md-12 text-center">Notícias recentes</h4>
    <tbody>
        @php
            $contador = 0;
        @endphp
        @foreach ($data as $item)
            @if ($item->visivel == 1)
                <tr>
                    <td class="col-md-8 text-left" style="font-size: 10px;"><h4>{{$item->titulo}}</h4></td>
                    <td class="col-md-2 text-right" style="font-size: 10px;"><span class="glyphicon glyphicon-pencil"></span> {{$item->autor}}</td>
                    <td class="col-md-2 text-right" style="font-size: 10px;"><span class="glyphicon glyphicon-time"></span> {{$item->updated_at->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td style="border: none;" colspan="4">{{$item->texto}}</td>
                </tr>
            @endif
            @php
                $contador++;
        @endphp
        @endforeach
        <tr>
            <td class="text-right" colspan="4"><strong>Quantidade notícias: {{$contador}}</strong></td>
        </tr>
    </tbody>
</table>
@endif
@endsection
