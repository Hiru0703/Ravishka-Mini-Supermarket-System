<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncomeStatementFormRequest extends FormRequest
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
        $rules =  [
            'income_id' => [
                'required',
                'string',
                'max:191',
                'unique:incomes,income_id'
            ],
            'type_of_income' => [
                'required',
                'string',
                'max:191',
            ],
            'i_date' => [
                'required',
                'date',
            ],
            'month_income' => [
                'required',
                'numeric',
            ],
            
        ];

        return $rules;

    } 

    public function messages() {

        return [
            'type_of_income.required' => 'Please select your type of income',
            'income_id.required' => 'Please enter your correct income ID',
            'i_date.required' => 'Please enter your income date',
            'month_income.required' => 'Please enter your monthly income',
        ];
    }
}
