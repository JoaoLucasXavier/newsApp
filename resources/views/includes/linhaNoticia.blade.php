<div class="container table">
    <div class="row">
        <div class="col-md-6">
            {{$item->titulo}}
        </div>
        <div class="col-md-3">
            {{$item->autor}}
        </div>
        <div class="col-md-3 text-right">
            @if ($item->visivel == 1)
                <a href="/noticia/gestao/invisivel/{{$item->id_noticia}}">
                    <span class="glyphicon glyphicon-eye-open" style="margin-left:10px;"></span>
                </a>
            @else
                <a href="/noticia/gestao/visivel/{{$item->id_noticia}}">
                    <span class="glyphicon glyphicon-eye-close" style="margin-left:10px;"></span>
                </a>
            @endif
            <a href="/noticia/editar/{{$item->id_noticia}}/form">
                <span class="glyphicon glyphicon-pencil" style="margin-left:10px;"></span>
            </a>
            <a href="/noticia/gestao/remover/{{$item->id_noticia}}">
                <span class="glyphicon glyphicon-trash" style="margin-left:10px;"></span>
            </a>
        </div>
    </div>
</div>
