<?php

namespace App\Http\Requests\Admin\SiteSetting;

use App\Rules\UrlRule;
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
            'logo' => 'nullable|max:255',
            'favicon' => 'nullable|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'phone_user' => 'required|max:255',
            'phone_2' => 'nullable|max:255',
            'phone_user_2' => 'nullable|max:255',
            'address' => 'required|string|max:255',
            'header_image' => 'nullable|max:255|dimensions:max_width=293,max_height=212',
            'footer_image' => 'nullable|max:255|dimensions:max_width=775,max_height=570',
            'home_first_image' => 'nullable|max:255|dimensions:max_width=969,max_height=660',
            'home_first_url' => ['nullable', 'max:255', new UrlRule()],
            'home_second_image' => 'nullable|max:255|dimensions:max_width=1290,max_height=600',
            'home_second_url' => ['nullable', 'max:255', new UrlRule()],
            'home_faq_main' => 'nullable|max:255:|dimensions:max_width=650,max_height=530',
            'home_faq_up' => 'nullable|max:255|dimensions:max_width=205,max_height=205',
            'home_faq_down' => 'nullable|max:255|dimensions:max_width=229,max_height=164',
            'blog_image' => 'nullable|max:255|dimensions:max_width=1920,max_height=620',
            'blog_detail_image' => 'nullable|max:255|dimensions:max_width=1920,max_height=620',
            'service_image' => 'nullable|max:255|dimensions:max_width=1920,max_height=620',
            'service_detail_image' => 'nullable|max:255|dimensions:max_width=1920,max_height=620',
            'contact_image' => 'nullable|max:255|dimensions:max_width=1920,max_height=620',
        ];
    }

    public function messages()
    {
        return [
            'home_first_url.required' => 'Lütfen geçerli bir url giriniz.',
            'home_second_url.required' => 'Lütfen geçerli bir url giriniz.',
            'header_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 293px, Yükseklik: 212px)',
            'footer_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 775px, Yükseklik: 570px)',
            'home_first_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 969px, Yükseklik: 660px)',
            'home_second_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1290px, Yükseklik: 600px)',
            'home_faq_main.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 650px, Yükseklik: 530px)',
            'home_faq_up.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 205px, Yükseklik: 205px)',
            'home_faq_down.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 229px, Yükseklik: 164px)',
            'blog_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1920px, Yükseklik: 620px)',
            'blog_detail_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1920px, Yükseklik: 620px)',
            'service_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1920px, Yükseklik: 620px)',
            'service_detail_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1920px, Yükseklik: 620px)',
            'contact_image.dimensions' => 'Lütfen geçerli bir resim boyutu giriniz. (Genişlik: 1920px, Yükseklik: 620px)',

        ];
    }
}
