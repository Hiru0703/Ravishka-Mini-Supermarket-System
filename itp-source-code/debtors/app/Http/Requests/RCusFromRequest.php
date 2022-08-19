<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RCusFromRequest extends FormRequest
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
           
            'rcusD_CID' =>[
                'required',
                'string',
                'max:191',
            ],
            'rcusName' =>[
                'required',
                'string',
                'max:191',
            ],
            'rcusPlan' =>[
                'required',
            ],
            'rcusAmount' =>[
                'required',
                'numeric',
                
            ],
          
         
        ];

        return $rules;
    }

    public function messages(){

        return[
          
            'rcusD_CID.required' => 'Please Enter D_CID',
            'rcusName.required' => 'Please Enter Regular Customer Debtors Name',
            'rcusPlan.required' => 'Please a Interest plan',
            'rcusAmount.required' => 'Please Enter Order Amount'
        ];
    }
}
