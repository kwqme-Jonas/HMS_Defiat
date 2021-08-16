<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('User Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- surname -->
            <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>

            <!-- othername -->
            <div>
                <x-label for="othername" :value="__('Othername')" />

                <x-input id="othername" class="block mt-1 w-full" type="text" name="othername" :value="old('othername')" required autofocus />
            </div>

            <!-- Name -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- appNumber -->
            <div>
                <x-label for="appNumber" :value="__('Application Number')" />

                <x-input id="surname" class="block mt-1 w-full" type="number" name="appNumber" :value="old('appNumber')" required autofocus />
            </div>

            <!-- surname -->
            <div>
                <x-label for="indexnumber" :value="__('Index Number')" />

                <x-input id="indexnumber" class="block mt-1 w-full" type="number" name="indexnumber" :value="old('indexnumber')" required autofocus />
            </div>

            <!-- dob -->
            <div>
                <x-label for="dob" :value="__('Date of Birth')" />

                <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus />
            </div>

            <!-- contact -->
            <div>
                <x-label for="contact" :value="__('Contact')" />

                <x-input id="contact" class="block mt-1 w-full" type="tel" name="contact" :value="old('contact')" required autofocus />
            </div>

            <!-- region -->
            <div>
                <x-label for="region" :value="__('Region')" />

                <x-input id="region" class="block mt-1 w-full" type="text" name="region" :value="old('region')" required autofocus />
            </div>

            <!-- year -->
            <div>
                <x-label for="year" :value="__('Year')" />

                <x-input id="surname" class="block mt-1 w-full" type="number" name="year" :value="old('year')" required autofocus />
            </div>

            <!-- level -->
            <div>
                <x-label for="level" :value="__('Level')" />

                <x-input id="level" class="block mt-1 w-full" type="number" name="level" :value="old('level')" required autofocus />
            </div>

            <!-- programme -->
            <div>
                <x-label for="programme" :value="__('Programme')" />

                <x-input id="programme" class="block mt-1 w-full" type="text" name="programme" :value="old('programme')" required autofocus />
            </div>

            <!-- department -->
            <div>
                <x-label for="department" :value="__('Department')" />

                <x-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required autofocus />
            </div>

            <!-- fname -->
            <div>
                <x-label for="fName" :value="__('Name of Father')" />

                <x-input id="fName" class="block mt-1 w-full" type="text" name="fName" :value="old('fName')" required autofocus />
            </div>

            <!-- mname -->
            <div>
                <x-label for="mName" :value="__('Name of Mother')" />

                <x-input id="mName" class="block mt-1 w-full" type="text" name="mName" :value="old('mName')" required autofocus />
            </div>

            <!-- fNumber -->
            <div>
                <x-label for="fNumber" :value="__('Contact of Father')" />

                <x-input id="fNumber" class="block mt-1 w-full" type="tel" name="fNumber" :value="old('fNumber')" required autofocus />
            </div>

            <!-- mNumber -->
            <div>
                <x-label for="mNumber" :value="__('Contact of Mother')" />

                <x-input id="mNumber" class="block mt-1 w-full" type="tel" name="mNumber" :value="old('mNumber')" required autofocus />
            </div>

            <!-- pic -->
            <div>
                <x-label for="pic" :value="__('Upload Photo')" />

                <x-input id="pic" class="block mt-1 w-full" type="file" name="pic" :value="old('pic')" required autofocus />
            </div>

            <!-- sponsorname -->
            <div>
                <x-label for="sponsorname" :value="__('Name of Sponsor')" />

                <x-input id="sponsorname" class="block mt-1 w-full" type="text" name="sponsorname" :value="old('sponsorname')" required autofocus />
            </div>

            <!-- sponsor_add -->
            <div>
                <x-label for="sponsor_add" :value="__('Address of Sponsor')" />

                <x-input id="sponsor_add" class="block mt-1 w-full" type="text" name="sponsor_add" :value="old('sponsor_add')" required autofocus />
            </div>

            <!-- sponsor_contact -->
            <div>
                <x-label for="sponsor_contact" :value="__('Contact of Sponsor')" />

                <x-input id="sponsor_contact" class="block mt-1 w-full" type="tel" name="sponsor_contact" :value="old('sponsor_contact')" required autofocus />
            </div>

            <!-- sponsor_email -->
            <div>
                <x-label for="sponsor_email" :value="__('Email of Sponsor')" />

                <x-input id="sponsor_email" class="block mt-1 w-full" type="email" name="sponsor_email" :value="old('sponsor_email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
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
