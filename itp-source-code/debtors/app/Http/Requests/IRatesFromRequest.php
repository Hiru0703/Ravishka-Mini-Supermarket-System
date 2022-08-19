<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IRatesFromRequest extends FormRequest
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
        $rules = [
            'cusmonth1' =>[
                'required',
                'numeric',
            ],
            'cusmonth2' =>[
                'required',
                'numeric',
            ],
            'cusmonth3' =>[
                'required',
                'numeric',
            ],
            'whbmonth1' =>[
                'required',
                'numeric',
            ],
            'whbmonth2' =>[
                'required',
                'numeric',
            ],
            'whbmonth3' =>[
                'required',
                'numeric',
            ],
         
        ];

        return $rules;
    }

    public function messages(){

        return[
            'cusmonth1.required' => 'Please Enter I-Rate',
            'cusmonth2.required' => 'Please Enter I-Rate',
            'cusmonth3.required' => 'Please Enter I-Rate',
            'whbmonth1.required' => 'Please Enter I-Rate',
            'whbmonth2.required' => 'Please Enter I-Rate',
            'whbmonth3.required' => 'Please Enter I-Rate',
        ];
    }
}