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

        Schema::create('news', function (Blueprint $table) {
            $table->id('identifier');
            $table->string('title')->default('null');
            $table->string('author')->default('null');
            $table->longText('introduction')->default('null');
            $table->string('UrlArticle')->default('null');
            $table->string('LinkImage')->default('null');
            $table->string('AltImage')->default('null')->nullable();
            $table->string('Theme')->default('null')->nullable();
            $table->string('ThemePrincipal')->default('null')->nullable();
            $table->string('FullDate')->default('null');
            $table->string('updated_at')->default('null')->nullable();
            $table->string('published_at')->default('null')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
