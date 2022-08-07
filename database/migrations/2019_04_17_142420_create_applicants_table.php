<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            // Parent or Guardian
            $table->string('name', 25);
            $table->string('email', 50)->nullable();
            $table->string('idpassport', 25);
            $table->string('mobile', 13);
            $table->string('address', 100);
            $table->string('city', 50);

            // Child Details
            $table->string('childfirstname', 25);
            $table->string('childlastname', 25);
            $table->string('DOB', 10);
            $table->string('education_level', 25); // pre pri high
            $table->string('grade', 12);
            $table->string('gender', 10);

            // Enrolment Options
            $table->string('enrol_type', 25); // Day or Boarding
            $table->string('previous_school', 100)->nullable();
            $table->Integer('startyear');
            $table->string('school_branch', 50); //name of school branch

            // Uploads (Optional)
            $table->string('scannedidpassport', 50);
            $table->string('proof_of_residence', 50);
            $table->string('childbirth_cert', 50);
            $table->string('learners_report', 50);

            // Application Status Columns
            $table->string('payment', 50)->default('Pending Reg Fee'); // Paid or Pending
            $table->string('enrolment', 50)->default('NO'); //
            $table->string('status', 50)->default('On Hold'); // Registered or Enrolled or Payment Pending
            $table->string('TsAndCs', 3)->default('YES');
            // login_xtra
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
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
        Schema::dropIfExists('applicants');
    }
}
