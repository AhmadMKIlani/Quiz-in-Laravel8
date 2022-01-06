@extends('publicSite.layout.master')

@section('title','log_in')
@section('content')
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
               <x-jet-input id="name" class="block mt-1 w-full" type="hidden" name="role_id" value="2" />
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



      <section class="Login" >
         <div class="container mt-5 ">
         <div class="row justify-content-center">
         <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card mb-5">
               <div class="login-card-header mt-3">Sign Up and Start Learning! </div>
               <div class="card-body">
                  <div id="form-register" >
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                           <x-jet-input id="name" class="block mt-1 w-full" type="hidden" name="role_id" value="2" />
                        </div>
                     <div class="form-group ">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input id="email" type="email" value="{{ __('Email') }}" class="form-control email-input" name="email">
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="name" class="control-label">Name</label>
                        <input id="name" type="text" value="{{ __('Name') }}" class="form-control full-name-input" name="name" value="" >
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" value="{{ __('Password') }}" class="form-control password-input" autocomplete="off" name="password" >
                        <div class="error"></div>
                     </div>
                     <div class="form-group ">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" value="{{ __('Confirm Password') }}" class="form-control conf-password-input" autocomplete="off" name="password_confirmation" >
                        <div class="error"></div>
                     </div>
                     @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                
            </div>
            <x-jet-button class="ml-4 btn primaryBtn white">
               {{ __('Register') }}
           </x-jet-button>
                    </form>
                  </div>
                  
               </div>
            </div>
         </div>
         <div>
      </section>
     

@endsection
