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
            'article_name_ru' => 'required',
            'annot_ru' => 'required',
            'article_name_en' => 'required',
            'annot_en' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))->status(200)
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
