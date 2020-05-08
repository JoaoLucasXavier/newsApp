<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    public function index()
    {
        // Retornar todas as noticias
        $data = noticias::all();
        return view('noticias', compact('data'));
    }

    public function create()
    {
        // Apresenta a página com o formulário de cadastro de de notícia
        return view('novaNoticia');
    }

    public function store(Request $request)
    {
        // Grava uma nova notícia na base de dados
        $noticia = new noticias;
        $noticia->titulo = $request->titulo;
        $noticia->texto = $request->texto;
        $noticia->autor = $request->autor;
        if (isset($request->visivel)) {
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }
        $noticia->save();
        return redirect('/');
    }

    public function show($id)
    {
        // Retorna uma notícia pelo id
    }

    public function edit($id)
    {
        // Retorna uma notícia pelo a partir do id informado
        // Apresentar o formulário para edição de notícia
        $data = noticias::find($id);
        return view('editarNoticia', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Atualiza uma notícia na base de dados
        // Grava uma nova notícia na base de dados
        $noticia = noticias::find($id);
        $noticia->titulo = $request->titulo;
        $noticia->texto = $request->texto;
        $noticia->autor = $request->autor;
        if (isset($request->visivel)) {
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }
        $noticia->save();
        return redirect('/noticia/gestao');
    }

    public function destroy($id)
    {
        // Remove uma noticia da base de dados
        noticias::destroy($id);
        return redirect('/noticia/gestao');
    }

    public function gestao()
    {
        // Carregar todas as notícias e apresentar em formato de tabela para gestão (Atualizar, Deletar, etc)
        $data = noticias::all();
        return view('gestaoNoticia', compact('data'));
    }

    public function colocarVisivel($id)
    {
        // Tornar uma notícia invisível, visível!
        $noticia = noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('/noticia/gestao');
    }

    public function colocarInvisivel($id)
    {
        // Tornar uma notícia visível, invisível!
        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('/noticia/gestao');
    }
}
