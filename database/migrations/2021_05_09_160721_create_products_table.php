<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('slug',255)->nullable();//tên không dấu
            $table->string('import_price',255)->nullable();//giá nhập
            $table->string('price',255)->nullable();//giá bán
            $table->string('amount',255)->nullable();//số lượng
            $table->string('sold_amount',255)->default(0);//số lượng đã bán
            $table->string('sku',255)->nullable();//mã hàng lưu kho
            $table->text('des')->nullable();// mô tả
            $table->text('parameter')->nullable();// cấu hình
            $table->string('summary',255)->nullable();// tóm tắt
            $table->string('status',255)->default(1);//trang thái
            $table->string('images',255)->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
