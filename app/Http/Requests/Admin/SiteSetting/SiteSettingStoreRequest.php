<?php

namespace App\Http\Requests\Admin\SiteSetting;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingStoreRequest extends FormRequest
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
            'logo' => 'required|string|max:255',
            'favicon' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|array|max:255',
            'address' => 'required|string|max:255',
        ];
    }
}
