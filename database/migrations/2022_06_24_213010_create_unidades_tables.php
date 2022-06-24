<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_tables', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //Adicionar a relação com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades_tables');
        });

           //Adicionar a relação com a tabela produto_detalhes
           Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades_tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Rmover relação com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            // remover a FK
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        //Remover relação com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            // remover a FK
            $table->dropForeign('produtos_unidade_id_foreign');
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades_tables');
    }
}
