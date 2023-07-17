<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSuggestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_suggests', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');  
            $table->integer('amount');  
            $table->decimal('money', 10, 2); 
            $table->string('status');  
            $table->datetime('purchase_date');  
            $table->datetime('delivery_date');  
            $table->unsignedBigInteger('person_delivery_id'); 
            $table->string('department');  
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
        Schema::dropIfExists('product_suggests');
    }
}
