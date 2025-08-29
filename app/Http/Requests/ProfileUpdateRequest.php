<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'not_regex:/\s/i'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
    public function messages(): array
    {
        $username = $this->input('username');

        // 1) شيل المسافات حوالين الشرطات
        $normalized = preg_replace('/\s*-\s*/', '-', $username);

        // 2) استبدل أى مسافات أو شرطات متتالية بشرطة واحدة
        $normalized = preg_replace('/[-\s]+/', '-', $normalized);

        // 3) شيل أى شرطة من البداية أو النهاية
        $example = trim($normalized, '-');

        return [
            'username.not_regex' => "Spaces are not allowed in the username. Try this instead: {$example}",
        ];
    }
}
