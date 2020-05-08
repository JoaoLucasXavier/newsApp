<?php

use Illuminate\Database\Seeder;

class noticias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numero_total_clients = 5;

        $titulos = [
            'titulo1',
            'titulo2',
            'titulo3',
            'titulo4',
            'titulo5'
        ];

        $textos = [
            'texto1',
            'texto2',
            'texto3',
            'texto4',
            'texto5'
        ];

        $autores = [
            'autor1',
            'autor2',
            'autor3',
            'autor4',
            'autor5'
        ];

        for ($i = 0; $i < $numero_total_clients; $i++) {
            $titulo = $titulos[array_rand($titulos)];
            $texto = $textos[array_rand($textos)];
            $autor = $autores[array_rand($autores)];
            $date = new DateTime();

            $dados = [
                'titulo' => $titulo,
                'texto' => $texto,
                'autor' => $autor,
                'created_at' => $date->format('Y-m-d H:i:s'),
                'updated_at' => $date->format('Y-m-d H:i:s')
            ];

            DB::table('noticias')->insert($dados);
        }
    }
}
