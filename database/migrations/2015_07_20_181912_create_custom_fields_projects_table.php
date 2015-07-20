<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldsProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*
        * CREATE TABLE `custom_fields_projects` (
                  `custom_field_id` int(11) NOT NULL DEFAULT '0',
                  `project_id` int(11) NOT NULL DEFAULT '0',
                  UNIQUE KEY `index_custom_fields_projects_on_custom_field_id_and_project_id` (`custom_field_id`,`project_id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        */
        Schema::create('custom_fields_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->index;
            $table->string('type', 30)->default('')->index;

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('custom_fields_projects');
    }
}
