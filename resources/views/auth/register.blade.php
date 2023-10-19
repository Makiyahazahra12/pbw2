<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


         <!-- UserName -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

                    
        <!-- Full Name -->
        <div>
            <x-input-label for="fullname" :value="__('Full Name')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
         </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

         <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

         <!-- Birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="phoneNumber" :value="__('Phone Number')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="number" name="phoneNumber" :value="old('phoneNumber')" required autofocus autocomplete="phoneNumber" />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <!-- Agama -->
        <div class="mt-4">
            <x-input-label for="agama" :value="__('Agama')" />
            <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" required autocomplete="agama" />
            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
        </div>

        <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
            <x-text-input id="jenisKelamin" class="block mt-1 w-full" type="text" name="jenisKelamin" :value="old('jenisKelamin')" required autocomplete="jenisKelamin" />
            <x-input-error :messages="$errors->get('jenisKelamin')" class="mt-2" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        
    </form>
</x-guest-layout>
