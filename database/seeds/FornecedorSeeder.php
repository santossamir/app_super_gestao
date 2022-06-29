<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Forma 1 - Instanciando o objeto;
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //Forma 2 - Método create();
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site'=>'fornecedor200.com.br',
            'uf'=>'RS',
            'email'=>'contato@fornecedor200.com.br'
        ]);

        //Forma 3 - Método insert();
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=>'fornecedor300.com.br',
            'uf'=>'SP',
            'email'=>'contato@fornecedor300.com.br'
        ]);
    }
}
