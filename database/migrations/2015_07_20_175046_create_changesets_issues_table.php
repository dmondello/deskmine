<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesetsIssuesTable extends Migration
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
         *      CREATE TABLE `changesets_issues` (
                  `changeset_id` int(11) NOT NULL,
                  `issue_id` int(11) NOT NULL,
                  UNIQUE KEY `changesets_issues_ids` (`changeset_id`,`issue_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
         *
         *
         */

        Schema::create('changesets_issues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('changeset_id')->unique;
            $table->integer('issue_id')->unique;

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('changesets_issues');
    }
}
