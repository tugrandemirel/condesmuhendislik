<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreRequest;
use App\Http\Requests\Admin\Service\UpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    private $_path = 'service/';    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = self::uploadImage($request->file('image'), $this->_path);
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = self::uploadImage($request->file('icon'), $this->_path);
        }
        $data['slug'] = Str::slug($data['title']).time();
        $create = Service::create($data);
        if ($create)
            return redirect()->route('admin.service.index')->with('success', 'Hizmet başarıyla oluşturuldu.');
        return redirect()->back()->with('error', 'Hizmet oluşturulurken bir hata oluştu.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.create-edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Service $service)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = self::uploadImage($request->file('image'), $this->_path, $service->image);
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = self::uploadImage($request->file('icon'), $this->_path, $service->image);
        }
        $data['slug'] = Str::slug($data['title']).time();
        $service = $service->update($data);
        if ($service)
            return redirect()->route('admin.service.index')->with('success', 'Hizmet başarıyla güncellendi.');
        return redirect()->back()->with('error', 'Hizmet güncellenirken bir hata oluştu.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->delete()) {
            self::deleteImage($service->image);
            return response()->json(['success' => true, 'message' => 'Sosyal medya hesabı başarıyla silindi.']);
        }
        return response()->json(['success' => false, 'message' => 'Sosyal medya hesabı silinirken bir hata oluştu.']);
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
