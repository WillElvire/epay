<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasactions', function (Blueprint $table) {
            $table->id();
            $table->integer('pack');
            $table->integer('money');
            $table->integer('payment_type');
            $table->integer('retour_sur_investissement')->default(0);
            $table->foreignId('user_id')->constrained()->onDeleteCascade();
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
        Schema::dropIfExists('trasactions');
    }
}
