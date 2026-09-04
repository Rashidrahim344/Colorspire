<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'service' => ['nullable', 'string', 'in:brand_identity,web_dev,graphic_design,content_social,hub_collaboration,custom_app,brand_platform,ecommerce,audit'],
            'budget' => ['nullable', 'string', 'in:creative_essentials,brand_builder,digital_presence,custom_scope,sprint,custom,enterprise,flexible'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ];
    }

    /**
     * Custom validation messages for accessible, helpful user feedback.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your full name.',
            'email.required' => 'A valid work email address is required so we can reply.',
            'email.email' => 'Please enter a valid email address format (e.g., name@company.com).',
            'message.required' => 'Please describe your project or primary objectives.',
            'message.min' => 'Please provide at least 10 characters describing your project.',
        ];
    }
}
