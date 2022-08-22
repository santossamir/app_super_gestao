<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //Relacionando com a table produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id'); //Adicionando nova coluna na tb produtos
            $table->foreign('unidade_id')->references('id')->on('unidades'); //Constraint de integridade referencial
        });

        //Relacionando com table produtos_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id'); //Adicionando nova coluna na tb produto_detalhes
            $table->foreign('unidade_id')->references('id')->on('unidades'); //Constraint de integridade referencial
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //1ª remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            //1.1 remover a foreignkeys
            $table->dropForeign('produto_detalhes_unidade_id_foreign');

            //1.2 remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        //2ª remover
        Schema::table('produtos', function(Blueprint $table){
           //2.1 remover a foreignkeys
           $table->dropForeign('produtos_unidade_id_foreign');

           //2.2 remover a coluna unidade_id
           $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
}
