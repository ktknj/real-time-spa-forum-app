<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('body');
            $table->bigInteger('question_id')->unsigned();

            $table->integer('user_id');
            // /外部キー制約
            // 参考URL：
            // https://qiita.com/Yorinton/items/3dbf6ad30358bd80fcb0
            // https://qiita.com/sutara79/items/9e57e7af03b65e0d6047
            $table->foreign('question_id')->references('id')
                ->on('questions')->onDelete('cascade');
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
        Schema::dropIfExists('replies');
    }
}
