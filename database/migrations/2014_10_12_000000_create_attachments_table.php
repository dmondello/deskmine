<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
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
         *  CREATE TABLE `attachments` (

                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `container_id` int(11) DEFAULT NULL,
                  `container_type` varchar(30) DEFAULT NULL,
                  `filename` varchar(255) NOT NULL DEFAULT '',
                  `disk_filename` varchar(255) NOT NULL DEFAULT '',
                  `filesize` int(11) NOT NULL DEFAULT '0',
                  `content_type` varchar(255) DEFAULT '',
                  `digest` varchar(40) NOT NULL DEFAULT '',
                  `downloads` int(11) NOT NULL DEFAULT '0',
                  `author_id` int(11) NOT NULL DEFAULT '0',
                  `created_on` datetime DEFAULT NULL,
                  `description` varchar(255) DEFAULT NULL,
                  `disk_directory` varchar(255) DEFAULT NULL,

                  PRIMARY KEY (`id`),
                  KEY `index_attachments_on_author_id` (`author_id`),
                  KEY `index_attachments_on_created_on` (`created_on`),
                  KEY `index_attachments_on_container_id_and_container_type` (`container_id`,`container_type`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
         *
         *
         *
         */


        Schema::create('attachments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id', 11);
            $table->integer('container_id')->nullable()->unsigned();
            $table->string('container_type', 30)->nullable()->index();
            $table->string('filename', 255);
            $table->string('disk_filename', 255);
            $table->integer('filesize')->default(0);
            $table->string('content_type', 255);
            $table->string('digest', 40);
            $table->integer('downloads')->default(0);
            $table->integer('author_id')->default(0)->index();
            $table->dateTime('created_on', 11)->nullable()->index();
            $table->string('description', 40)->nullable();
            $table->string('disk_directory', 255)->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attachments');
    }
}
