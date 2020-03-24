<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_values', function (Blueprint $table) {

            $table->string("id")->nullable();
            $table->string("user_id");
            $table->increments("skill_id");
            $table->string("rating")->default('Not set')->nullable();
            $table->timestamps();            
        });

        //DB::statement("ALTER TABLE skills_values AUTO_INCREMENT = 1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills_values');
    }
}
