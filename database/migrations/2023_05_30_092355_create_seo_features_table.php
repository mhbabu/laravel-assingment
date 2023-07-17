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
        Schema::create('seo_features', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('page_name')->nullable();
            $table->string('slug')->uniqid();
            $table->string('seo_title')->nullable();
            $table->string('og_title')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('og_type')->nullable();

            $table->longText('canonical_url')->nullable();
            $table->longText('keywords')->nullable();
            $table->longText('og_description')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('twitter_description')->nullable();

            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->string('image_alt_text')->nullable();

            $table->string('og_image')->nullable();
            $table->string('og_image_path')->nullable();
            $table->string('og_image_alt_text')->nullable();

            $table->string('twitter_image')->nullable();
            $table->string('twitter_image_path')->nullable();
            $table->string('twitter_image_alt_text')->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('seo_features');
    }
};
