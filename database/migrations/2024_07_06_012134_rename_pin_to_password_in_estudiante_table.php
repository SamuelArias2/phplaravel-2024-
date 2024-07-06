<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePinToPasswordInEstudianteTable extends Migration
{
    public function up()
    {
        Schema::table('estudiante', function (Blueprint $table) {
            $table->renameColumn('pin', 'password');
        });
    }

    public function down()
    {
        Schema::table('estudiante', function (Blueprint $table) {
            $table->renameColumn('password', 'pin');
        });
    }
}
