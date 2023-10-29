<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $seo = Seo::where('page_type', 'GENEL')->first();
        $sliders = Slider::all();
        $services = Service::where('is_show', true)
                    ->where('status', true)
                    ->orderBy('updated_at', 'asc')
                    ->get();
        $blogs = Blog::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->get();

        return view('front.index', compact('sliders', 'services', 'blogs', 'seo'));
    }

    public function about()
    {
        $seo = Seo::where('page_type', 'HAKKIMIZDA')->first();
        $serviceCount = Service::where('status', true)->count();
        return view('front.about', compact('seo', 'serviceCount'));
    }
    public function blog()
    {
        $seo = Seo::where('page_type', 'BLOG')->first();
        $blogs = Blog::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->get();
        return view('front.blog', compact('blogs', 'seo'));
    }
    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();
        $recentBlogs = Blog::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->limit(4)
            ->get();
        return view('front.blog-detail', compact('blog', 'recentBlogs'));
    }

    public function service()
    {
        $seo = Seo::where('page_type', 'HIZMETLERIMIZ')->first();
        $services = Service::where('status', true)
                    ->orderBy('updated_at', 'asc')
                    ->get();

        return view('front.service', compact('services', 'seo'));
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)
                    ->where('status', true)
                    ->firstOrFail();
        $recentServices = Service::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->limit(4)
            ->get();
        return view('front.service-detail', compact('service', 'recentServices'));
    }

    public function contact()
    {
        $seo = Seo::where('page_type', 'ILETISIM')->first();
    }

}
