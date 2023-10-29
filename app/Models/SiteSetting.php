<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'header_image',
        'footer_image',
        'home_first_image',
        'home_first_url',
        'home_second_image',
        'home_second_url',
        'home_faq_main',
        'home_faq_up',
        'home_faq_down',
        'blog_image',
        'blog_detail_image',
        'service_image',
        'service_detail_image',
        'contact_image',
    ];
}
