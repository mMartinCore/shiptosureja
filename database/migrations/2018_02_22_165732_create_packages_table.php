<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->text('description');
            $table->string('weight');
            $table->date('received_at_mailbox_date')->nullable();
            $table->date('ship_date');
            $table->date('arrival_date')->nullable();
            $table->date('collect_date')->nullable();
            $table->integer('price');
            $table->tinyInteger('status')->default(0);
            $table->integer('track_value')->default(0);
            $table->integer('discount_price')->nullable();
            $table->integer('user_id')->unsigned();
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
