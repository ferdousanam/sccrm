<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_code')->nullable();
            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('passport')->nullable();
            $table->string('village')->nullable();
            $table->string('post_office')->nullable();
            $table->string('district')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('last_education')->nullable();
            $table->string('last_education_result')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('interested_in')->nullable();
            $table->string('ssc_level')->nullable();
            $table->string('ssc_group')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('hons')->nullable();
            $table->string('hons_group')->nullable();
            $table->string('hons_year')->nullable();
            $table->string('university_name')->nullable();
            $table->string('university_place')->nullable();
            $table->string('medium_instruction')->nullable();
            $table->string('pg')->nullable();
            $table->string('pg_group')->nullable();
            $table->string('publication')->nullable();
            $table->string('ielts_score')->nullable();
            $table->string('preferred_country')->nullable();
            $table->string('preferred_subject')->nullable();
            $table->string('no_of_child')->nullable();
            $table->string('fund_source')->nullable();
            $table->string('income_source')->nullable();
            $table->string('siblings_name')->nullable();
            $table->string('scholarship_required')->nullable();
            $table->text('notes')->nullable();
            $table->string('photo')->nullable();
            $table->bigInteger('counselor_id')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
