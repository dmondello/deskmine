<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesetParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE `changeset_parents` (
                  `changeset_id` int(11) NOT NULL,
                  `parent_id` int(11) NOT NULL,
                  KEY `changeset_parents_changeset_ids` (`changeset_id`),
                  KEY `changeset_parents_parent_ids` (`parent_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
         */

        Schema::create('changeset_parents', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('changeset_id')->index;
            $table->integer('parent_id')->index;


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('changeset_parents');

    }
}
