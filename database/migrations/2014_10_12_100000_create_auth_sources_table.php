<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */




    /*
     * CREATE TABLE `auth_sources` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `type` varchar(30) NOT NULL DEFAULT '',
          `name` varchar(60) NOT NULL DEFAULT '',
          `host` varchar(60) DEFAULT NULL,
          `port` int(11) DEFAULT NULL,
          `account` varchar(255) DEFAULT NULL,
          `account_password` varchar(255) DEFAULT '',
          `base_dn` varchar(255) DEFAULT NULL,
          `attr_login` varchar(30) DEFAULT NULL,
          `attr_firstname` varchar(30) DEFAULT NULL,
          `attr_lastname` varchar(30) DEFAULT NULL,
          `attr_mail` varchar(30) DEFAULT NULL,
          `onthefly_register` tinyint(1) NOT NULL DEFAULT '0',
          `tls` tinyint(1) NOT NULL DEFAULT '0',
          `filter` varchar(255) DEFAULT NULL,
          `timeout` int(11) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `index_auth_sources_on_id_and_type` (`id`,`type`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
     *
     *
     *
     */
    public function up()
    {
        Schema::create('auth_sources', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->index();
            $table->string('type', 30)->index();
            $table->string('host', 60);
            $table->timestamp('created_at')->nullable();
            $table->integer('port')->nullable();
            $table->string('account', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('base_dn', 255)->nullable();
            $table->string('attr_login', 30)->nullable();
            $table->string('attr_firstname', 30)->nullable();
            $table->string('attr_lastname', 30)->nullable();
            $table->string('attr_mail', 30)->nullable();
            $table->tinyInteger('onthefly_register')->default(0);
            $table->tinyInteger('tls')->default(0);
            $table->string('filter', 255)->nullable();
            $table->integer('timeout')->nullable();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_sourcesj');
    }
}
