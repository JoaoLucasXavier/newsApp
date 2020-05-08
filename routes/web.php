<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

# Pagina inicial
// URI: http://localhost:8000
Route::get('/', 'noticiasController@index');

# Formulário criar notícia
// URI: http://localhost:8000/noticia/form
Route::get('/noticia/form', 'noticiasController@create');

# Salvar notícia
// URI: http://localhost:8000/noticia/salvar
Route::post('/noticia/salvar', 'noticiasController@store');

# Formulário editar notícia
// URI: http://localhost:8000/noticia/editar/{id}}
Route::get('/noticia/editar/{id}/form', 'noticiasController@edit');

# Editar notícia
// URI: http://localhost:8000/noticia/editar/{id}
Route::post('/noticia/editar/{id}', 'noticiasController@update');







# Página de gestão
// URI: http://localhost:8000/noticia/gestao
Route::get('/noticia/gestao', 'noticiasController@gestao');

# Colocar notícia visível
// URI: http://localhost:8000/noticia/gestao/visivel/{id}
Route::get('/noticia/gestao/visivel/{id}', 'noticiasController@colocarVisivel');

# Colocar notícia invisível
// URI: http://localhost:8000/noticia/gestao/invisivel/{id}
Route::get('/noticia/gestao/invisivel/{id}', 'noticiasController@colocarInvisivel');

# Remover notícia pelo id
// URI: http://localhost:8000/noticia/gestao/remover/{id}
Route::get('/noticia/gestao/remover/{id}', 'noticiasController@destroy');
