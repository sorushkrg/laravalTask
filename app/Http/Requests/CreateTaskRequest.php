<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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

            "title" => [
                "required",
                "min:6",
                "max:50",
            ],
            "description" => [
                "required",
                "min:6",
            ],
            "deadline" => [
                "required",
                "date",
            ],
            "files" => [
                "required",
                "array"
            ],
            "files.*" => [
                "file",           // فایل باید یک فایل باشد
                "mimes:pdf",   // فرمت فایل‌های مجاز

            ],

        ];
    }
}
