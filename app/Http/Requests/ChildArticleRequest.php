<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class ChildArticleRequest extends FormRequest
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
            'surname.*' => ['required'],
            'name.*' => ['required'],
            'work.*' => ['required'],
            'adress.*' => ['required'],
            'status.*' => ['required'],
            'degree.*' => ['required'],
            'rank.*' => ['required'],

            'article_name' => 'required',
            'files' => ['required_unless:form,4','file','mimes:docx'],
            'section' => 'required',
            'form' => 'required',
            'email' => ['required','email'],
            'phone' => ['required','regex:/\(\d{3}\)\d{3}-\d{4}/'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))->status(200)
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
