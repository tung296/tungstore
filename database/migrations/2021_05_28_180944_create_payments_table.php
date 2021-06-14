<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('transaction_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->float('money')->nullable();
            $table->string('transaction_code',255)->nullable()->comment('ma don hang');
            $table->string('note',255)->nullable()->comment('so tien thanh toan');
            $table->string('vnp_response_code',255)->nullable()->comment('mã phản hồi');
            $table->string('code_vnpay',255)->nullable()->comment('mã giao dịch vnpay');
            $table->string('code_bank',255)->nullable()->comment('mã ngân hàng');
            $table->dateTime('time')->nullable()->comment('thời gian chuyển khoản');
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
        Schema::dropIfExists('payments');
    }
}
