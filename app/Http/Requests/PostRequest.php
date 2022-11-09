<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|string',
            'slug' => 'nullable|string',
            'date' => 'date_format:Y-m-d H:i'
        ];
    }

    public function messages()
    {
        return [
            'date.date_format' => 'The date format is not valid',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->title && !$this->slug ? $this->string('title')->slug()->value : $this->slug,
            'date' => $this->date('date')->format('Y-m-d H:i')
        ]);
    }
}
