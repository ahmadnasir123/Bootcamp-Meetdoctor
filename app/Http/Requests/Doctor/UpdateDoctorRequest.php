<?php

namespace App\Http\Requests\Doctor;

use App\Models\Operational\Doctor;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('doctor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
