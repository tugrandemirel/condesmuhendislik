<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Seo\StoreRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seos = Seo::all();
        return view('admin.seo.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seo.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $create = Seo::create($data);
        if ($create) {
            return redirect()->route('admin.seo.index')->with('success', 'SEO ayarı başarıyla oluşturuldu.');
        }
        return redirect()->back()->with('error', 'SEO ayarı oluşturulurken bir hata oluştu. Lütfen tekrar deneyiniz.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seo $seo)
    {
        return view('admin.seo.create-edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Seo $seo)
    {
        $data = $request->validated();
        $update = $seo->update($data);
        if ($update) {
            return redirect()->route('admin.seo.index')->with('success', 'SEO ayarı başarıyla güncellendi.');
        }
        return redirect()->back()->with('error', 'SEO ayarı güncellenirken bir hata oluştu. Lütfen tekrar deneyiniz.');
    }
}
