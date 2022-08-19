<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementFormRequest extends FormRequest
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
            
            'expense_id' => [
                'required',
                'string',
                'max:191',
                'unique:tasks,expense_id'
            ],
            'type_of_expense' => [
                'required',
                'string',
                'max:191',
            ],
            'e_date' => [
                'required',
                'date',
            ],
            'month_expense' => [
                'required',
                'numeric',
            ],
            
        ];

        return $rules;

    } 

    public function messages() { //create expense validation messages

        return [
            
            'type_of_expense.required' => 'Please select your type of expense',
            'expense_id.required' => 'Please enter your correct expense ID',
            'e_date.required' => 'Please enter your expense date',
            'month_expense.required' => 'Please enter your monthly expense',
        ];
    }
}