<?php

namespace App\Http\Requests;



class ChangePasswordRequest extends Request
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
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => 'Umesahau kuweka neno la siri la zamani',
            'password.required' => 'Umesahau kuweka neno la siri jipya',
            'password.confirmed' => 'Maneno ya siri mapya hayafanani'
        ];
    }
}
