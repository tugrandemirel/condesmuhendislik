<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialMedia\StoreRequest;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialMedias = SocialMedia::all();
        return view('admin.social-media.index', compact('socialMedias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social-media.create-edit');
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
        $create = SocialMedia::create($data);
        if ($create) {
            return redirect()->route('admin.social_media.index')->with('success', 'Sosyal medya hesabı başarıyla oluşturuldu.');
        } else {
            return redirect()->route('admin.social_media.index')->with('error', 'Sosyal medya hesabı oluşturulurken bir hata oluştu.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        return view('admin.social-media.create-edit', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, SocialMedia $socialMedia)
    {
        $data = $request->all();
        $update = $socialMedia->update($data);
        if ($update) {
            return redirect()->route('admin.social_media.index')->with('success', 'Sosyal medya hesabı başarıyla güncellendi.');
        } else {
            return redirect()->route('admin.social_media.index')->with('error', 'Sosyal medya hesabı güncellenirken bir hata oluştu.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        if ($socialMedia->delete()) {
            return response()->json(['success' => true, 'message' => 'Sosyal medya hesabı başarıyla silindi.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Sosyal medya hesabı silinirken bir hata oluştu.']);
        }
    }
}
