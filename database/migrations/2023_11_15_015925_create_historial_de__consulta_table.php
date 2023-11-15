<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_de__consulta', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->id();
            $table->date('fecha');
            $table->string('sintoma_1',50);
            $table->string('sintoma_2',50);
            $table->string('sintoma_3',50);
            $table->time('sintoma_4',50);
            $table->string('proveedor',50);
            $table->string('comentarios_medico',100);
            $table->id();
            $table->string('examenes',100);
            $table->id();
            $table->string('peso',50);
            $table->string('altura',50);
            $table->string('presion_sanguinea',50);
            $table->string('glucosa',50);
            $table->date('fecha_actualizacion',50);
            $table->string('alergia_1',50);
            $table->string('alergia_2',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_de__consulta');
    }
};
