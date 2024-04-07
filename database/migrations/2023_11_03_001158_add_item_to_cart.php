<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemToCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->string('cart_id');
            $table->string('cart_user');
            $table->string('item_id');
            $table->string('item_desc');
            $table->string('item_price');
            $table->string('item_qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->dropColumn('cart_id');
            $table->dropColumn('cart_user');
            $table->dropColumn('item_id');
            $table->dropColumn('item_desc');
            $table->dropColumn('item_price');
            $table->dropColumn('item_qty');
        });
    }
}
