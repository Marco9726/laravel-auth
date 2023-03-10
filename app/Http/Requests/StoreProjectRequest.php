<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
		return [
			'title' => ['required', 'unique:projects', 'max:150'],
			'description' => ['nullable']
		];
	}

	public function messages()
	{
		return [
			'title.required' => 'Non hai inserito un titolo',
			'title.unique' => 'Il titolo inserito è già esistente',
			'title.max' => 'La lunghezza del titolo non può essere superiore a :max caratteri'
		];
	}
}
