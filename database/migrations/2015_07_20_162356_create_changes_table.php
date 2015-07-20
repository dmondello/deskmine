<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
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
         * CREATE TABLE `changes` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `changeset_id` int(11) NOT NULL,
              `action` varchar(1) NOT NULL DEFAULT '',
              `path` text NOT NULL,
              `from_path` text,
              `from_revision` varchar(255) DEFAULT NULL,
              `revision` varchar(255) DEFAULT NULL,
              `branch` varchar(255) DEFAULT NULL,
              PRIMARY KEY (`id`),
              KEY `changesets_changeset_id` (`changeset_id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
         *
         *
         *
         */

        Schema::create('changes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('changeset_id')->default('')->unsigned();
            $table->string('action', 1)->default('');
            $table->text('path');
            $table->text('from_path', 255);
            $table->string('from_revision', 255)->default(null);
            $table->string('revision', 255)->default(null);
            $table->string('branch', 255)->default(null);;


            $table->foreign('changeset_id')->references('id')->on('changesets');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('changes');
    }
}
