<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::where('is_show', true)
                    ->where('status', true)
                    ->orderBy('updated_at', 'asc')
                    ->get();
        $blogs = Blog::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->get();

        return view('front.index', compact('sliders', 'services', 'blogs'));
    }

    public function about()
    {
    }
    public function blog()
    {
        $blogs = Blog::where('status', true)
            ->orderBy('updated_at', 'asc')
            ->get();
    }
    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();
    }

    public function service()
    {
        $services = Service::where('status', true)
                    ->orderBy('updated_at', 'asc')
                    ->get();
    }

    public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)
                    ->where('status', true)
                    ->firstOrFail();

    }

    public function contact()
    {
    }

}
