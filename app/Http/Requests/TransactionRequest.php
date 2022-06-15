<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'category_id' => [
                'required',
                Rule::exists('categories', 'id')->where('user_id', auth()->id())
            ],
            'amount' => 'required',
            'description' => 'required',
            'transaction_date' => 'required|date',
        ];
    }
}
