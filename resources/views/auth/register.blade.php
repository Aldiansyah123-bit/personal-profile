<x-guest-layout>
    @section('title')
        {{ config('quest.name', 'Registrasi') }}
    @endsection

    @section('title2')
        <a href=""><b>Registrasi</b></a>
    @endsection
    @section('content')

        <x-jet-validation-errors class="mb-4" />
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="lahir" value="{{ __('Lahir') }}" />
                <x-jet-input id="lahir" class="form-control" type="date" name="lahir" :value="old('lahir')" required autofocus autocomplete="lahir" />
            </div>

            <div>
                <x-jet-label for="umur" value="{{ __('Umur') }}" />
                <x-jet-input id="umur" class="form-control" type="text" name="umur" :value="old('umur')" required autofocus autocomplete="umur" />
            </div>

            <div>
                <x-jet-label for="kota" value="{{ __('Kota') }}" />
                <x-jet-input id="kota" class="form-control" type="text" name="kota" :value="old('kota')" required autofocus autocomplete="kota" />
            </div>

            <div>
                <x-jet-label for="website" value="{{ __('Website') }}" />
                <x-jet-input id="website" class="form-control" type="text" name="website" :value="old('website')" required autofocus autocomplete="website" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Keterangan') }}" />
                <x-jet-input id="keterangan" class="form-control" type="text" name="keterangan" :value="old('keterangan')" required autofocus autocomplete="keterangan" />
            </div>

            <div>
                <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                <x-jet-input id="alamat" class="form-control" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
            </div>

            <div>
                <x-jet-label for="contact" value="{{ __('No.Telpon') }}" />
                <x-jet-input id="contact" class="form-control" type="number" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <br>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                  </div>
                </div>         
                <x-jet-button class="col-4 btn btn-primary btn-block" >
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </div>
    @endsection
</x-guest-layout>
