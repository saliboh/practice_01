<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class PostBlogRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                'string'
            ],
            'content' => [
                'required',
                'string'
            ],
            'file' => [
                'nullable',
                'mimes:jpg,bmp,png',
                'max:5000'
            ],
            'type' => [
                'required',
                'in:Government,Foods,Sport,Places'
            ],
        ];
    }
}
