<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'user_notes' => 'nullable|string|max:255',
            'meta_keywords' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'status' => 'required|boolean|in:0, 1',
        ];
    }
}
