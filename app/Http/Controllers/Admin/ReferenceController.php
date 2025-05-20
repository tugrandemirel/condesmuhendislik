<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Reference\ReferenceStoreRequest;
use App\Models\Reference;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ReferenceController extends Controller
{
    private $_path = 'reference/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        try {
            $references = Reference::query()
                ->paginate(20);

            return view("admin.reference.index", compact('references'));
        } catch (\Exception $exception) {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(ReferenceStoreRequest $request)
    {
        $attributes = collect($request->validated());
        try {
            $reference = new Reference();
            $reference->uuid = Str::uuid();
            $reference->name = $attributes->get('name');
            $reference->url = $attributes->get('url');
            $reference->description = $attributes->get('desc');
            $reference->created_by_user_id = auth()->id();

            if ($request->hasFile("image")) {
                $upload_image = self::uploadImage($request->file('image'), $this->_path);
                $reference->image = $upload_image;
            }

            if ($reference->save()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Başarıyla kaydedildi.',
                ], 200);
            }
        } catch (\Exception $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Başarısız oldu.',
            ], 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reference  $reference
     * @return Response
     */
    public function edit(Reference $reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reference  $reference
     * @return Response
     */
    public function update(Request $request, Reference $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reference  $reference
     * @return JsonResponse
     */
    public function destroy(Request $request)
    {
        try {
            $reference = Reference::query()
                ->where('id', $request->input('id'))
                ->first();

            $reference?->delete();
            self::deleteImage($reference->image);
            return response()->json([
                'status' => true,
                'message' => 'Başarıyla ile silme işlemi gerçekleştirildi.',
            ], 200);

        } catch (\Exception $exception) {

            return response()->json([
                'status' => false,
                'message' => 'Başarısız oldu.',
            ], 500);
        }
    }

    public static function uploadImage($image, $path, $oldImage = null): string
    {
        if ($oldImage) {
            self::deleteImage($oldImage);
        }

        $directory = public_path('images/' . $path);

        // Klasör yoksa oluştur
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        // Benzersiz dosya adı oluştur
        $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();

        // Dosyayı taşı
        $image->move($directory, $imageName);

        // Geriye göreli yolu döndür
        return 'images/' . trim($path, '/') . '/' . $imageName;
    }

    public static function deleteImage($image)
    {
        if (file_exists(public_path($image))) {
            unlink(public_path($image));
        }
    }

}
