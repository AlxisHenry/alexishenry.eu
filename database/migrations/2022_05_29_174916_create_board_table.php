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
        Schema::create('board', function (Blueprint $table) {
            $table->id('identifier')->index();
            $table->string('title')->default('null');
            $table->longText('description')->default('null');
            $table->string('author')->default('null');
            $table->string('documentationLink')->default('null');
            $table->date('published_at')->useCurrent();
            $table->date('edit_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board');
    }
};
