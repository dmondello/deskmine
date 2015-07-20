<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesetsTable extends Migration
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
         *      CREATE TABLE `changesets` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `repository_id` int(11) NOT NULL,
                          `revision` varchar(255) NOT NULL,
                          `committer` varchar(255) DEFAULT NULL,
                          `committed_on` datetime NOT NULL,
                          `comments` longtext,
                          `commit_date` date DEFAULT NULL,
                          `scmid` varchar(255) DEFAULT NULL,
                          `user_id` int(11) DEFAULT NULL,
                          PRIMARY KEY (`id`),
                          UNIQUE KEY `changesets_repos_rev` (`repository_id`,`revision`),
                          KEY `index_changesets_on_user_id` (`user_id`),
                          KEY `index_changesets_on_repository_id` (`repository_id`),
                          KEY `index_changesets_on_committed_on` (`committed_on`),
                          KEY `changesets_repos_scmid` (`repository_id`,`scmid`)
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
         *
         *
         *
         */

        Schema::create('changesets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('repository_id')->unique->index;
            $table->string('revision', 255)->unique;
            $table->varchar('committer')->default(null);
            $table->dataTime('committed_on')->index;;
            $table->longText('comments');
            $table->date('commit_date')->default(null);
            $table->string('scmid', 255)->default(null)->index;;
            $table->integer('user_id')->default(null)->index;

        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('changesets');
    }
}
