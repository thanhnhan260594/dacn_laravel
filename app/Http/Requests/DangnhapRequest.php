<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DangnhapRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 * abc
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
			'txtUser' => 'required',
			'txtPass' => 'required'
		];
	}
	public function messages()
{
    return [
        'txtUser.required' => 'Phải nhập tên tài khoản',
        'txtPass.required'  => 'Phải nhập mật khẩu',
    ];
}

}
