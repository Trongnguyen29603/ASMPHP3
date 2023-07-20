<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Khoa_hocRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule = [];
        $currdentAction = $this->route()->getActionMethod();
        switch($this->method()):
            case 'POST':
               switch($currdentAction):
                 case'add':
                   $rule = [
                      "name"=> "required",
                      "price"=>"required",
                      'describe'=>'required',
                      'process'=>'required',
                      'id_category'=>'required'
                   ]; 
               break;
               case'edit':
                $rule = [
                    "name"=> "required",
                    "price"=>"required",
                    'describe'=>'required',
                    'process'=>'required',
                    // 'id_category'=>'required'
                 ]; 
                 break;
            

                 endswitch;   
             endswitch;   
             return $rule;
    }
}
