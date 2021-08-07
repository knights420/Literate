<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('login_status')->default(0);
            $table->string('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('first_name','name');
            $table->dropColumn('last_name');
            $table->dropColumn('mobile');
            $table->dropColumn('status');
            $table->dropColumn('login_satus');
            $table->dropColumn('avatar');
        });
    }
}
