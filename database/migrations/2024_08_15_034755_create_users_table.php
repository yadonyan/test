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
        Schema::create('users', function (Blueprint $table) {
	    $table->id();
	    $table->string('name'); // name カラム
	    $table->string('email')->unique(); // email カラム (ユニーク制約)
	    $table->timestamp('email_verified_at')->nullable(); // email_verified_at カラム (null 可能)
            $table->string('password'); // password カラム
	    $table->rememberToken(); // remember_token カラム
            $table->timestamps(); // created_at と updated_at カラム
	    $table->softDeletes(); // deleted_at カラム (ソフトデリート)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
