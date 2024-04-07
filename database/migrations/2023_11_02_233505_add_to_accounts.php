<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public $timestamps = false;
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->string('username');
            $table->string('password');
            $table->string('alias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('password');
            $table->dropColumn('alias');
        });
    }
}
