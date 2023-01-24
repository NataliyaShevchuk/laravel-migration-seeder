<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_migration_seeder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('azienda');
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            // $table->renameColumn('staziione_di_arrivo', 'stazione_di_arrivo')->change();
            // $table->dropColumn('staziione_di_arrivo');
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->char('codice_treno', length:4);
            $table->smallInteger('numero_carrozze');
            $table->dateTime('in_orario');
            $table->boolean('cancellato')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laravel_migration_seeder');
            
    }
};
