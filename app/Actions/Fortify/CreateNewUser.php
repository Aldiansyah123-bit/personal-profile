<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lahir' => ['required', 'date'],
            'umur' => ['required'],
            'kota' => ['required'],
            'website' => ['required'],
            'keterangan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lahir' => $input['lahir'],
            'umur' => $input['umur'],
            'kota' => $input['kota'],
            'website' => $input['website'],
            'keterangan' => $input['keterangan'],
            'alamat' => $input['alamat'],
            'contact' => $input['contact'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
