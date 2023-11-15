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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->id();
            $table->string('lote',14);
            $table->string('proveedor',25);
            $table->string('marca',25);
            $table->string('dosis',25);
            $table->string('formula_farmaceutica',50);
            $table->string('embalaje',25);
            $table->string('unidades_en_envase',14);
            $table->tring('precio_empaque',10);
            $table->string('via_administracion',25);
            $table->date('fecha_vencimiento',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamento');
    }
};
