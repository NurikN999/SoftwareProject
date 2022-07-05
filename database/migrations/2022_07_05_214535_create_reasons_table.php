<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reasons', function (Blueprint $table) {
            $table->id();
            $table->string('reason_name');
        });

        \Illuminate\Support\Facades\DB::table('reasons')->insert([
            ['reason_name' => 'OTP'],
            ['reason_name' => 'KCrecognition'],
            ['reason_name' => 'Sales on check-in Desk'],
            ['reason_name' => 'Proposed and implemented idea'],
            ['reason_name' => 'Timely processed email'],
            ['reason_name' => 'Intermediate Bulletin Knowledge Test'],
            ['reason_name' => 'Sport Games'],
            ['reason_name' => 'Passenger reviews'],
            ['reason_name' => 'Familiarization with bulletins and instructions in KCdocs, ELMA'],
            ['reason_name' => 'The status of the command mail was not changed in a timely manner'],
            ['reason_name' => 'Late for shift'],
            ['reason_name' => 'Flight report not sent in a timely manner'],
            ['reason_name' => 'Closing flights at DCS Crane later'],
            ['reason_name' => 'Late and unprepared start of registration (lack of forms, registration tags)'],
            ['reason_name' => 'Appearance failure'],
            ['reason_name' => 'Incorrect shift transfer'],
            ['reason_name' => 'Safety report, CCDR'],
            ['reason_name' => 'Justified Passenger Complaint'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reasons');
    }
};
