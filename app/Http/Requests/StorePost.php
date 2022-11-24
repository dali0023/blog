<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:blog_posts|max:255|min:10',
            'content' => 'required|min:10',
        ];
    }
}
