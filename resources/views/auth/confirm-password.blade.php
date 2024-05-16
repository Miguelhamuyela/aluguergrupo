<link rel="apple-touch-icon" sizes="180x180" href="/site/images/logo_tics.png">
<link rel="icon" type="image/png" sizes="32x32" href="/site/images/logo_tics.png">
<link rel="icon" type="image/png" sizes="16x16" href="/site/images/logo_tics.png">

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('site.home') }}">
                <img src="/site/images/logo.png" alt="meninas e as TIC" width="80" /><br>
                <b class="text-center">Meninas e as TIC</b>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
