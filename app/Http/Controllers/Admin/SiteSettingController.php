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
        $data['phone'] = json_encode($data['phone']);
        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path);
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
        $data['phone'] = json_encode($data['phone']);
        if ($request->hasFile('logo')) {
            $data['logo'] = self::uploadImage($request->file('logo'), $this->_path);
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = self::uploadImage($request->file('favicon'), $this->_path);
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
