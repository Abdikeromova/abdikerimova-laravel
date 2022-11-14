<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProposalStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text' => 'required',
            'category_id' => 'required|numeric',
            'branch_id' => 'required|numeric'
        ];
    }
}
