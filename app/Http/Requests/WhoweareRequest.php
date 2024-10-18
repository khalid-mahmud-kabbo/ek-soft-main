<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhoweareRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'point_1'=>'required',
            'point_2'=>'required',
            'point_3'=>'required',
            'point_4'=>'required',
            'main_image'=>'required',
            'sub_image'=>'required',
        ];
    }
}
