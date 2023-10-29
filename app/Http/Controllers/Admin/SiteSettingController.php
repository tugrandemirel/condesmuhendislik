<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SiteSetting\SiteSettingStoreRequest;
use App\Http\Requests\Admin\SiteSetting\UpdateRequest;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteSettingController extends Controller
{

    private $_path = 'site-setting/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteSetting = SiteSetting::first();
        return view('admin.site-setting.index', compact('siteSetting'));
    }



    /**
     * Store the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteSettingStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path);
        }

        if ($request->hasFile('header_image')) {
            $data['header_image'] = self::uploadImage($request->file('header_image'), $this->_path);
        }
        if ($request->hasFile('footer_image')) {
            $data['footer_image'] = self::uploadImage($request->file('footer_image'), $this->_path);
        }
        if ($request->hasFile('home_first_image')) {
            $data['home_first_image'] = self::uploadImage($request->file('home_first_image'), $this->_path);
        }
        if ($request->hasFile('home_second_image')) {
            $data['home_second_image'] = self::uploadImage($request->file('home_second_image'), $this->_path);
        }
        if ($request->hasFile('home_faq_main')) {
            $data['home_faq_main'] = self::uploadImage($request->file('home_faq_main'), $this->_path);
        }
        if ($request->hasFile('home_faq_up')) {
            $data['home_faq_up'] = self::uploadImage($request->file('home_faq_up'), $this->_path);
        }
        if ($request->hasFile('home_faq_down')) {
            $data['home_faq_down'] = self::uploadImage($request->file('home_faq_down'), $this->_path);
        }
        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = self::uploadImage($request->file('blog_image'), $this->_path);
        }
        if ($request->hasFile('blog_detail_image')) {
            $data['blog_detail_image'] = self::uploadImage($request->file('blog_detail_image'), $this->_path);
        }
        if ($request->hasFile('service_image')) {
            $data['service_image'] = self::uploadImage($request->file('service_image'), $this->_path);
        }
        if ($request->hasFile('service_detail_image')) {
            $data['service_detail_image'] = self::uploadImage($request->file('service_detail_image'), $this->_path);
        }
        if ($request->hasFile('contact_image')) {
            $data['contact_image'] = self::uploadImage($request->file('contact_image'), $this->_path);
        }

        $siteSetting = SiteSetting::create($data);
        if ($siteSetting)
            return redirect()->route('admin.site_setting.index')->with('success', 'Site ayarları başarıyla güncellendi.');

        return redirect()->route('admin.site_setting.index')->with('error', 'Site ayarları güncellenirken bir hata oluştu.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, SiteSetting $siteSetting)
    {

        $data = $request->validated();
        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path, $siteSetting->logo);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path, $siteSetting->favicon);
        }
        if ($request->hasFile('header_image')) {
            $data['header_image'] = self::uploadImage($request->file('header_image'), $this->_path, $siteSetting->header_image);
        }
        if ($request->hasFile('footer_image')) {
            $data['footer_image'] = self::uploadImage($request->file('footer_image'), $this->_path, $siteSetting->footer_image);
        }
        if ($request->hasFile('home_first_image')) {
            $data['home_first_image'] = self::uploadImage($request->file('home_first_image'), $this->_path, $siteSetting->home_first_image);
        }
        if ($request->hasFile('home_second_image')) {
            $data['home_second_image'] = self::uploadImage($request->file('home_second_image'), $this->_path, $siteSetting->home_second_image);
        }
        if ($request->hasFile('home_faq_main')) {
            $data['home_faq_main'] = self::uploadImage($request->file('home_faq_main'), $this->_path, $siteSetting->home_faq_main);
        }
        if ($request->hasFile('home_faq_up')) {
            $data['home_faq_up'] = self::uploadImage($request->file('home_faq_up'), $this->_path, $siteSetting->home_faq_up);
        }
        if ($request->hasFile('home_faq_down')) {
            $data['home_faq_down'] = self::uploadImage($request->file('home_faq_down'), $this->_path, $siteSetting->home_faq_down);
        }
        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = self::uploadImage($request->file('blog_image'), $this->_path, $siteSetting->blog_image);
        }
        if ($request->hasFile('blog_detail_image')) {
            $data['blog_detail_image'] = self::uploadImage($request->file('blog_detail_image'), $this->_path, $siteSetting->blog_detail_image);
        }
        if ($request->hasFile('service_image')) {
            $data['service_image'] = self::uploadImage($request->file('service_image'), $this->_path, $siteSetting->service_image);
        }
        if ($request->hasFile('service_detail_image')) {
            $data['service_detail_image'] = self::uploadImage($request->file('service_detail_image'), $this->_path, $siteSetting->service_detail_image);
        }
        if ($request->hasFile('contact_image')) {
            $data['contact_image'] = self::uploadImage($request->file('contact_image'), $this->_path, $siteSetting->contact_image);
        }

        $siteSetting = $siteSetting->update($data);
        if ($siteSetting)
            return redirect()->route('admin.site_setting.index')->with('success', 'Site ayarları başarıyla güncellendi.');
        else
            return redirect()->route('admin.site_setting.index')->with('error', 'Site ayarları güncellenirken bir hata oluştu.');
    }


    public static function uploadImage($image, $path, $oldImage = null)
    {
        if ($oldImage) {
            self::deleteImage($oldImage);
        }
        if (!file_exists(public_path('images/'.$path))) {
            mkdir(public_path('images/'.$path), 0777, true);
        }
        $imageext = $image->extension();
        $imageName = Str::uuid() . '.' . $imageext;
        $image->move(public_path('images/'.$path), $imageName);
        return 'images/'.$path . $imageName;
    }

    public static function deleteImage($image)
    {
        if (file_exists(public_path($image))) {
            unlink(public_path($image));
        }
    }
}
