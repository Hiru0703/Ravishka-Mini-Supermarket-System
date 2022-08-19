<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DBuyersFormRequest extends FormRequest
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
            'D_CID' =>[
                'required',
                'string',
                'max:191',
            ],
            'whName' =>[
                'required',
                'string',
                'max:191',
            ],
            'whPlan' =>[
                'required',
            ],
            'whAmount' =>[
                'required',
                'numeric',
                
            ],       
        ];

        return $rules;
    }

    public function messages(){

        return[
            'D_CID.required' => 'Please Enter D_CID',
            'whName.required' => 'Please Enter Wholesale Debtors Name',
            'whPlan.required' => 'Please a Interest plan',
            'whAmount.required' => 'Please Enter Order Amount',
        ];
    }
}
