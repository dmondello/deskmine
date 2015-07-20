<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
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
         * CREATE TABLE `comments` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `commented_type` varchar(30) NOT NULL DEFAULT '',
                  `commented_id` int(11) NOT NULL DEFAULT '0',
                  `author_id` int(11) NOT NULL DEFAULT '0',
                  `comments` text,
                  `created_on` datetime NOT NULL,
                  `updated_on` datetime NOT NULL,
                  PRIMARY KEY (`id`),
                  KEY `index_comments_on_commented_id_and_commented_type` (`commented_id`,`commented_type`),
                  KEY `index_comments_on_author_id` (`author_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

         *
         */



        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('commented_type', 30)->default(0)->index;
            $table->integer('commented_id');
            $table->integer('author_id')->default(0)->index;
            $table->text('comments');
            $table->dateTime('updated_on');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
