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
        Schema::create('breaking_news', function (Blueprint $table) {
            $table->id( 'news_id' );
            $table->string( 'news_title' );
            $table->string( 'news_cat', 100 )->default( 'latest' );
            $table->string( 'news_sub_cat', 100 )->default( 'business' );
            $table->string( 'location', 100 )->default( 'nepal' );
            $table->string( 'description' );
            $table->timestamps();
            $table->string( 'news_status', 20 )->default( 'draft' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breaking_news');
    }
};
