<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserR extends Request
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
        $rules = [
            'name'=>'required|min:3',
            'email'=>'required|email|max:255'
        ];

        if(strpos($action, 'store')){
            $rules2['password'] ="required|min:6";
            $rules = array_merge_recursive($rules, $rules2);
        }


        return $rules;
    }
}
