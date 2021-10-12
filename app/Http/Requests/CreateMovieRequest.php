<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'title' => 'required|string',
            'genre' => 'required|string',
            'director' => 'sometimes',
            'year_of_release' => 'sometimes|integer|min:1900|max:' . date('Y'),
            'storyline' => 'max:1000'
        ];
    }
}
