<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'service_id' => 'required|numeric',
            'payment_method_id' => 'required|numeric',
            'user_detail_id' => 'required|numeric',
            // 'uuid' => 'required|numeric',
            'platform' => 'required',
            'status' => 'required',
            'additional' => 'required',
            'total' => 'required',
            'is_paid' => 'required',
        ];
    }
}
