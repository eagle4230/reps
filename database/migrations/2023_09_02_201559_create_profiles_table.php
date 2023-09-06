<?php

declare(strict_types=1);

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
    Schema::create('profiles', static function (Blueprint $table): void {
      $table->foreignId('user_id')
        ->references('id')
        ->on('users')
        ->cascadeOnDelete();

      $table->foreignId('avatar_id')
        ->references('id')
        ->on('avatars')
        ->cascadeOnDelete();

      $table->integer('rating');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('profiles');
  }
};
