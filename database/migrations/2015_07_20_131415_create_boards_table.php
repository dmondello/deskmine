<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */




    public function up()
    {
        /*
         *
         * CREATE TABLE `boards` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `project_id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL DEFAULT '',
              `description` varchar(255) DEFAULT NULL,
              `position` int(11) DEFAULT '1',
              `topics_count` int(11) NOT NULL DEFAULT '0',
              `messages_count` int(11) NOT NULL DEFAULT '0',
              `last_message_id` int(11) DEFAULT NULL,
              `parent_id` int(11) DEFAULT NULL,
              PRIMARY KEY (`id`),
              KEY `boards_project_id` (`project_id`),
              KEY `index_boards_on_last_message_id` (`last_message_id`)
           )
            ENGINE=InnoDB DEFAULT CHARSET=utf8;
         *
         *
         */

        Schema::create('boards', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('project_id');
            $table->string('name');
            $table->string('description');
            $table->integer('position')->default(1);
            $table->integer('topics_count')->default(0);
            $table->integer('message_count')->default(0);
            $table->integer('last_message_id')->nullable()->index();
            $table->integer('parent_id');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('boards');
    }
}
