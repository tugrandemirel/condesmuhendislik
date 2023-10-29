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
            $table->string('header_image')->nullable()->after('address');
            $table->string('footer_image')->nullable()->after('header_image');
            $table->string('home_first_image')->nullable()->after('footer_image');
            $table->string('home_first_url')->nullable()->after('home_first_image');
            $table->string('home_second_image')->nullable()->after('home_first_url');
            $table->string('home_second_url')->nullable()->after('home_second_image');
            $table->string('home_faq_main')->nullable()->after('home_second_url');
            $table->string('home_faq_up')->nullable()->after('home_faq_main');
            $table->string('home_faq_down')->nullable()->after('home_faq_up');
            $table->string('blog_image')->nullable()->after('home_faq_up');
            $table->string('blog_detail_image')->nullable()->after('blog_image');
            $table->string('service_image')->nullable()->after('blog_detail_image');
            $table->string('service_detail_image')->nullable()->after('service_image');
            $table->string('contact_image')->nullable()->after('service_detail_image');
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
            //
        });
    }
};
