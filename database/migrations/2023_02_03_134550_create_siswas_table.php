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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string("nisn");
            $table->string("no_hp");
            $table->string("status")->nullable(true);
            $table->foreignId("user_id")->constrained();
            $table->foreignId("kelas_id")->constrained('kelas','id');
            $table->foreignId("jurusan_id")->constrained('jurusans','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
