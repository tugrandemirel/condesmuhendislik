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
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('phone', 20)->nullable()->change();
            $table->string('phone_user')->nullable()->after('phone');
            $table->string('phone_2')->nullable()->after('phone_user');
            $table->string('phone_user_2')->nullable()->after('phone_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn(['phone_user', 'phone_2', 'phone_user_2']);
        });
    }
};
