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
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
