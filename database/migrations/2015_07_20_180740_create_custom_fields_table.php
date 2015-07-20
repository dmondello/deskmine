<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE `custom_fields` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `type` varchar(30) NOT NULL DEFAULT '',
                  `name` varchar(30) NOT NULL DEFAULT '',
                  `field_format` varchar(30) NOT NULL DEFAULT '',
                  `possible_values` text,
                  `regexp` varchar(255) DEFAULT '',
                  `min_length` int(11) DEFAULT NULL,
                  `max_length` int(11) DEFAULT NULL,
                  `is_required` tinyint(1) NOT NULL DEFAULT '0',
                  `is_for_all` tinyint(1) NOT NULL DEFAULT '0',
                  `is_filter` tinyint(1) NOT NULL DEFAULT '0',
                  `position` int(11) DEFAULT '1',
                  `searchable` tinyint(1) DEFAULT '0',
                  `default_value` text,
                  `editable` tinyint(1) DEFAULT '1',
                  `visible` tinyint(1) NOT NULL DEFAULT '1',
                  `multiple` tinyint(1) DEFAULT '0',
                  `format_store` text,
                  `description` text,
                  PRIMARY KEY (`id`),
                  KEY `index_custom_fields_on_id_and_type` (`id`,`type`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

         *
         */


        Schema::create('custom_fields', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->index;
            $table->string('type', 30)->default('')->index;
            $table->string('name', 30)->default('');
            $table->string('field_format', 30)->default('');
            $table->text('possible_values');
            $table->string('regexp', 255)->default('');
            $table->integer('min_lenght')->default(null);
            $table->integer('max_lenght')->default(null);
            $table->tinyInteger('is_required')->default(0);
            $table->tinyInteger('is_for_all')->default(0);
            $table->tinyInteger('is_filter')->default(0);
            $table->integer('position')->default(1);
            $table->tinyInteger('serchable')->default(0);
            $table->text('default_value');
            $table->tinyInteger('editable')->default(1);
            $table->tinyInteger('visible')->default(1);
            $table->tinyInteger('multiple')->default(0);
            $table->text('format_store');
            $table->text('description');

        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('custom_fields');
    }
}
