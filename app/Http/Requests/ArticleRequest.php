<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class ArticleRequest extends FormRequest
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
            'surname_ru.*' => ['required'],
            'name_ru.*' => ['required'],
            'work_ru.*' => ['required'],
            'adress_ru.*' => ['required'],
            'status_ru.*' => ['required'],
            'degree.*' => ['required'],
            'rank.*' => ['required'],

            'surname_en.*' => ['required'],
            'name_en.*' => ['required'],
            'work_en.*' => ['required'],
            'adress_en.*' => ['required'],
            'status_en.*' => ['required'],

            'article_name_ru' => 'required',
            'annot_ru' => 'required',
            'article_name_en' => 'required',
            'annot_en' => 'required',
            'word_ru.*' => ['sometimes','required'],
            'word_en.*' => ['sometimes','required'],
            'udk' => 'required',
            'files' => ['required','mimes:zip,rar'],
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
