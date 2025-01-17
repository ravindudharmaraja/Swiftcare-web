<?php

namespace App\Http\Requests;

use App\Models\Ambulance\Ambulance;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AmbulanceProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(Ambulance::class)->ignore($this->user()->id)],
        ];
    }
}
