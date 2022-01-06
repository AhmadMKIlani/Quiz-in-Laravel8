@extends('publicSite.layout.master')

@section('title','log_in')
@section('content')

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 btn primaryBtn white">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

   <section class="Login">
      <div class="container mt-5 ">
         <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
               <div class="card mb-5">
                  <div class="login-card-header mt-3">Log In to Your Account! </div>
                  <div class="card-body"> 
                   <form id="form-register" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group ">
                           <label for="email" class="control-label">E-Mail Address</label>
                           <input id="email" type="email" value="{{ __('Email') }}"class="form-control" name="email">
                           <div class="check"> </div>
                        </div>
                        <div class="form-group ">
                           <label for="password" class="control-label">Password</label>
                           <input id="password" type="password" value="{{ __('Password') }}" class="form-control" autocomplete="off" name="password">
                           <div class="check"> </div>
                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <x-jet-button class="ml-4 btn primaryBtn white">
                           {{ __('Log in') }}
                       </x-jet-button>
                     </form>
                     <div class="mt-4">
                        <span>Don't have an account? <a class="ms-1 regster-href" href="signUp.html">Sign up</a> </span>
                     </div>
                  </div>
               </div>
            </div>
            <div>
   </section>
 

@endsection

