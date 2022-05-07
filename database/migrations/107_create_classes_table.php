<?php

use App\Models\Subject;
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
        Schema::create('classes', function (Blueprint $table) {
            $table->string('class_id')->unique()->primary();
            // $table->date('start_date');
            $table->string('start_date');
            $table->integer('max_number_students')->default(70);
            $table->integer('current_number_students')->default(0);
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('user_id')->on('teachers')->onDelete('cascade');
            $table->foreignIdFor(Subject::class, 'subject_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
