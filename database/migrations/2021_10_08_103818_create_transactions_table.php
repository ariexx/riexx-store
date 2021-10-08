<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->foreignId('payment_method_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_detail_id')->constrained()->cascadeOnDelete();
            $table->string('uuid');
            $table->enum('platform', ['epic', 'steam', 'rockstar']);
            $table->integer('status'); //0 = pending, 1 = processing, 3 = completed
            $table->string('additional'); //whatsapp buyer numbers
            $table->integer('total'); //whatsapp buyer numbers
            $table->boolean('is_paid'); //whatsapp buyer numbers
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
