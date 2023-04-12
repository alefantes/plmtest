<?php

namespace App\Http\Requests\Plm;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'task_id'=>'nullable|string',
            'constructors_name_id'=>'required|string',
            'comment'=>'nullable|string',
            'link'=>'nullable|string',
            'qty_per_one'=>'required|numeric',
            'units_id'=>'required|string',
            'qty_per_order'=>'required|numeric',
            'date_requested'=>'required|date',
            'date_planing'=>'required|date',
            'date_fact'=>'required|date',
            'is_closed'=>'required|string',
            'status'=>'required|string',
            'project_id'=>'required|string',
            'creator_id'=>'required|string',
        ];
    }
}
