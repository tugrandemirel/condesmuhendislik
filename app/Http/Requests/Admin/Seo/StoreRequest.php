<?php

namespace App\Http\Requests\Admin\Seo;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'keywords' => 'required|string|max:255',
            'page_type' => 'required|string|in:GENEL,HIZMETLER,BLOG,ILETISIM',
        ];
    }
}
