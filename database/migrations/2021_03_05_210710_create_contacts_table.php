<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('download_at')->nullable();

            $table->string('you_ar')->nullable();
            $table->string('department')->nullable();
            $table->string('mode')->nullable();
            $table->string('persons')->nullable();
            $table->string('age')->nullable();

            $table->unsignedBigInteger('identity_id')->index();
            $table->foreign('identity_id')->references('id')->on('identities');
            
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
        Schema::dropIfExists('contacts');
    }
}
