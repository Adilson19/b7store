<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\State;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //  Adicionando o relacionamento entre a tabela User com a tabela State
            $table->foreignIdFor(State::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //  Fazendo o crontrario (Apagando a chave estrangeira e a coluna)
            $table->dropForeign(['state_id']);
            $table->dropColumn('state_id');
        });
    }
};
