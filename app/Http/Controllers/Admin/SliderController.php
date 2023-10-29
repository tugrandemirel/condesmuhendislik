<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    private $_path = 'slider/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048|dimensions:width=960,max_height=594',
        ], [
            'image.dimensions' => 'Slider resmi 960x594 boyutunda olmalıdır.'
        ]);
        $image = $request->file('image');
        $imagePath = self::uploadImage($image, $this->_path);
        $create = Slider::create([
            'image' => $imagePath,
        ]);
        if (!$create) {
            return redirect()->back()->with('error', 'Slider eklenemedi.');
        }
        return redirect()->route('admin.slider.index')->with('success', 'Slider eklendi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.create-edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048|dimensions:width=960,max_height=594',
        ], [
            'image.dimensions' => 'Slider resmi 960x594 boyutunda olmalıdır.'
        ]);
        $image = $request->file('image');
        $imagePath = self::uploadImage($image, $this->_path, $slider->image);
        $create = $slider->update([
            'image' => $imagePath,
        ]);
        if (!$create) {
            return redirect()->back()->with('error', 'Slider eklenemedi.');
        }
        return redirect()->route('admin.slider.index')->with('success', 'Slider eklendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if ($slider->delete())
        {
            self::deleteImage($slider->image);
            return response()->json(['success' => true, 'message' => 'Slider başarıyla silindi.']);
        }
        return response()->json(['success' => false, 'message' => 'Slider silinirken bir hata oluştu.']);
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
