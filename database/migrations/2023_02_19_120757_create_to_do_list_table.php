<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     * check .env for the database credentials, make sure
     * to double check which database/schema it is being
     * migrated to
     *
     * important terminal commands:
     *
     * | php artisan migrate | - to migrate the php schema classes to
     * database
     *
     * | php artisan db:seed | - to run seeding from php in order to
     * transfer pre existing rows in the database (good for
     * running any test with the database with fake data)
     *
     * | php artisan migrate:refresh | - another function in migrate
     * that refreshes the database for any changes
     *
     * | php artisan make:model | - makes a template of a class in php with
     *
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('to_do_list', function (Blueprint $table) {
            $table->id('to_do_list_id');
            $table->string('user');
            $table->string('task');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('to_do_list');
    }
};
