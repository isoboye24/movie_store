<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'title' => ['required', 'string', 'max:255'],
        'released' => ['required', 'integer', 'digits:4'],
        'description' => ['nullable', 'string', 'min:5', 'max:1000'],
        'image_url' => ['nullable', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Der Titel ist erforderlich.',
            'title.max' => 'Der Titel darf maximal 255 Zeichen haben.',
            'released.required' => 'Bitte geben Sie das Erscheinungsjahr ein.',
            'released.digits' => 'Das Jahr muss genau 4 Ziffern haben.',
            'description.min' => 'Die Beschreibung muss mindestens 5 Zeichen lang sein.',
            'description.max' => 'Die Beschreibung darf maximal 1000 Zeichen haben.',
        ];
    }

}
