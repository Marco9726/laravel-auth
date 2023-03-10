<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
		return [ //utiliziziamo il metodo unique() della classe Rule passandogli la tabella, dicendo di ignorare il post attuale, così volendo da poter lasciare lo stesso titolo
			'title' => ['required', Rule::unique('projects')->ignore($this->project), 'max:150'],
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
