<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    private $_path = 'blog/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create-edit');
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
        $data['status'] = $request->has('status') ? 1 : 0;
        $data['slug'] = Str::slug($data['title']).time();
        $blog = Blog::create($data);
        if ($blog)
            return redirect()->route('admin.blog.index')->with('success', 'Blog başarıyla oluşturuldu.');
        return redirect()->back()->with('error', 'Blog oluşturulurken bir hata oluştu.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.create-edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Blog $blog)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = self::uploadImage($request->file('image'), $this->_path, $blog->image);
        }
        $data['status'] = $request->has('status') ? 1 : 0;
        $data['slug'] = Str::slug($data['title']).time();
        $blog = $blog->update($data);
        if ($blog)
            return redirect()->route('admin.blog.index')->with('success', 'Blog başarıyla güncellendi.');
        return redirect()->back()->with('error', 'Blog güncellenirken bir hata oluştu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->delete()) {
            self::deleteImage($blog->image);
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
