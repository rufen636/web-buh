<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class UpdateSeoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /** @return array<string, list<\Illuminate\Validation\Rules\In|string>> */
    public function rules(): array
    {
        $paths = array_keys(config('seo.pages'));

        return [
            'pages' => ['required', 'array', 'list', 'size:'.count($paths)],
            'pages.*' => ['required', 'array:path,title,description'],
            'pages.*.path' => ['required', 'string', Rule::in($paths), 'distinct'],
            'pages.*.title' => ['required', 'string', 'max:255', 'distinct:ignore_case'],
            'pages.*.description' => ['required', 'string', 'max:500', 'distinct:ignore_case'],
        ];
    }

    /** @return array<string, string> */
    public function messages(): array
    {
        return [
            'pages.*.title.required' => 'Укажите заголовок страницы.',
            'pages.*.title.max' => 'Заголовок должен содержать не более 255 символов.',
            'pages.*.title.distinct' => 'У каждой страницы должен быть свой заголовок.',
            'pages.*.description.required' => 'Укажите описание страницы.',
            'pages.*.description.max' => 'Описание должно содержать не более 500 символов.',
            'pages.*.description.distinct' => 'У каждой страницы должно быть своё описание.',
        ];
    }
}
