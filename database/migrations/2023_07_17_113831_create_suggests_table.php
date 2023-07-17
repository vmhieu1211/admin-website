<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggests', function (Blueprint $table) {
            $table->id();
            $table->string('products_name'); 
            $table->integer('amount');    
            $table->decimal('money', 10, 2);  
            $table->string('suggest_type');  
            $table->string('asset_type');  
            $table->unsignedBigInteger('person_suggest_id');  
            $table->datetime('suggest_date');  
            $table->string('status');  
            $table->string('department_suggest'); 
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
        Schema::dropIfExists('suggests');
    }
}
