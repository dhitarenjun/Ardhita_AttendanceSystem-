<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();                                // Primary key 'id'
            $table->string('student_name');              // Kolom untuk nama mahasiswa
            $table->string('student_id');                // Kolom untuk ID mahasiswa
            $table->date('attendance_date');             // Kolom untuk tanggal kehadiran
            $table->enum('status', ['present', 'absent', 'late']); // Kolom untuk status kehadiran
            $table->timestamps();                        // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}