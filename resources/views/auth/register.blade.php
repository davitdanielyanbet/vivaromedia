<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Username')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <div  class="mt-4">
                <x-label for="first_name" :value="__('First name')"/>

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required
                         autofocus/>
            </div>
            <div  class="mt-4">
                <x-label for="last_name" :value="__('Last name')"/>

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required
                         autofocus/>
            </div>
            <div  class="mt-4">
                <x-label for="postition" :value="__('Position')"/>

                <x-input id="postition" class="block mt-1 w-full" type="text" name="postition" :value="old('postition')" required autofocus/>
            </div>
            <div  class="mt-4">
                <x-label for="short_desc" :value="__('About you')"/>

                <x-input id="short_desc" class="block mt-1 w-full" type="text" name="short_desc" :value="old('short_desc')" required autofocus/>
            </div>
            <div  class="mt-4">
                <x-label for="first_name" :value="__('Upload your image')"/>

                <x-input id="avatar_url" class="block mt-1 w-full" type="file" name="avatar_url" :value="old('avatar_url')" required autofocus />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
