<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdomains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('meta_key')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('ya_id')->nullable();
            $table->string('ga_id')->nullable();
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
        Schema::dropIfExists('subdomains');
    }
}
