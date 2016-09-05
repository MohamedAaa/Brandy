<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ServicesR extends Request
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
        $route = \Route::current();
        $action = $route->getName();
        // var_dump();
        $rules = [
            //
            'name'=>'required',
            'content'=>'required|min:10'
        ];

        if(strpos($action, 'store')){
            $rules2['img'] ="required|image";
            $rules = array_merge_recursive($rules, $rules2);
        }


        return $rules;

    }
}
