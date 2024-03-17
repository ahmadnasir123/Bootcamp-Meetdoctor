<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Operational\Doctor;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('doctor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'specialist_id' => [
                'required', 'integer',
            ],
            'name' => [
                'required', 'string', 'max:255',
            ],
            'fee' => [
                'required', 'string', 'max:255',
            ],
            'photo' => [
                'nullable', 'string', 'max:10000',
            ],
        ];
    }
}
