<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //* Integer unsigned auto_increment
            $table->string('name');//Varchar() y como segundo parámetro, después de name, iría la cantidad como tal
            //$table->text(); //* En este caso, text almacena más de 255 caracteres
            $table->string('email')->unique(); //* En este caso, unique no puede volverse a almacenar otro igual
            $table->timestamp('email_verified_at')->nullable(); //* El email lo verificamos con _verified_at y le decimos que puede ser nulo
            $table->string('password');
            
            $table->rememberToken();//* Crear varchars con 100 máximo, crea tokens para los usuarios
            $table->timestamps();//* create_at updated_at, en estas columnas, se modiifca la hora de cuando se crea o modifica un registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
