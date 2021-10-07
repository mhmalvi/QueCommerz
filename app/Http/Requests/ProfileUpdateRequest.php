<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => "First name is required",
            'lastname.required' => "Last name is required",
        ];
    }

    public function update()
    {
        $user = auth()->user();
        $user->email = $this->email;

        $user->save();

        $this->updateBillingInfo($user);
    }

    private function updateBillingInfo(User $user)
    {
        $info = $user->info;

        $info->update($this->info);
    }
}
