<?php

use Doctrine\DBAL\Schema\Schema as SchemaSchema;
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
        //
        Schema::create('supplier', function(Blueprint $table){
            $table->increments('id_supplier');
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('telpon', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
