{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

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

<x-base-layout>
    
    <div class="form-signin">
        

        <section class="content-central">
            <div class="semiboxshadow text-center">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="" style="padding-bottom:40px;">
                            <div class="thinborder-ontop">
                                <h3>User Info</h3>
                                <x-jet-validation-errors class="mb-4 alert-danger" />
                                <form id="userregisterationform" method="POST" action="{{ route('register') }}">                                    
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-form-label text-md-right">Name</label>
                                        <div class="">
                                            <input id="name"  class="form-control" type="text" name="name" :value="old('name')" required="" autofocus="" autocomplete="name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-form-label text-md-right">E-Mail Address</label>
                                        <div class="">
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required>
                                        </div>
                                    </div>
    
                                    
    
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-form-label text-md-right">Password</label>
                                        <div class="">
                                            <input id="password"  class="form-control" type="password" name="password" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-form-label text-md-right">Confirm Password</label>
                                        <div class="">
                                            <input id="password-confirm"  class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="">
                                            <span style="font-size: 14px;">If you have already registered <a
                                                    href="{{route('login')}}" title="Login">click here</a> to login</span>
                                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </section>
    </div>
</x-base-layout>