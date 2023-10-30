<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
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
        return view('front.contact', compact('seo'));
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'phone' => 'required|string|max:13',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|string'
        ], [
            'name.required' => 'Ad alanı zorunludur.',
            'surname.required' => 'Soyad alanı zorunludur.',
            'phone.required' => 'Telefon alanı zorunludur.',
            'phone.max' => 'Telefon alanı en fazla 13 haneli olabilir.(Sayılar ve + dışındakileri siliniz.)',
            'email.required' => 'Email alanı zorunludur.',
            'email.email' => 'Lütfen geçerli bir email giriniz.',
            'message.required' => 'Mesajınız alanı zorunludur.',
        ]);

        $create = Contact::create($data);
        if ($create)
            return redirect()->back()->with('success', 'Mesajınız başarılı bir şekilde iletilmiştir.');
        return redirect()->back()->with('error', 'Mesajınızın gönderim sırasında bir hata ile karşılaşıldı.');
    }
}
