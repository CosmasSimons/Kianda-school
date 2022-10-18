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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role_id', ['teacher', 'student', 'admin']);

            //all users
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();

            //students
            $table->json('faculty')->nullable();
            $table->json('classin')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('parent_email')->nullable();
            $table->json('subject1')->nullable();
            $table->json('subject2')->nullable();
            $table->json('subject3')->nullable();
            $table->json('subject4')->nullable();
            $table->json('subject5')->nullable();
            $table->json('subject6')->nullable();
            $table->json('subject7')->nullable();
            $table->json('subject8')->nullable();
            $table->json('subject9')->nullable();
            $table->json('subject10')->nullable();

            //teachers
            $table->json('tfaculty')->nullable();
            $table->json('teaching1')->nullable();
            $table->json('teaching2')->nullable();
            $table->json('teaching3')->nullable();
            $table->json('teaching4')->nullable();
            $table->json('teaching5')->nullable();
            $table->json('classincharge')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
