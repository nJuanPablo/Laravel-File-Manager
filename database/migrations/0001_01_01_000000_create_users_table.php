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
            $table->bigInteger('cedula')->unique();
            $table->string('nombre')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user'); // Rol del usuario (admin o user)
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la carpeta
            $table->unsignedBigInteger('parent_id')->nullable(); // Carpeta padre (para jerarquía)
            $table->unsignedBigInteger('user_id'); // Relación con la tabla users
            $table->timestamps();
        
            // Claves foráneas
            // Clave foránea recursiva para carpetas anidadas
            $table->foreign('parent_id')->references('id')->on('folders')->onDelete('cascade');

            // Clave foránea para relación con usuarios
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('files', function (Blueprint $table) {
            $table->id(); // ID único
            $table->string('name'); // Nombre del archivo
            $table->string('path'); // Ruta del archivo almacenado
            $table->foreignId('folder_id')->constrained('folders')->onDelete('cascade'); // Relación con la carpeta
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relación con el usuario
            $table->timestamps(); // Fechas de creación y actualización
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
