<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemToItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('item_id');
            $table->string('item_name');
            $table->string('item_desc');
            $table->string('item_qty');
            $table->string('item_type');
            $table->string('item_rate');
            $table->string('item_price');
            $table->string('item_loc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('item_id');
            $table->dropColumn('item_name');
            $table->dropColumn('item_desc');
            $table->dropColumn('item_qty');
            $table->dropColumn('item_type');
            $table->dropColumn('item_rate');
            $table->dropColumn('item_price');
            $table->dropColumn('item_loc');
        });
    }
}
