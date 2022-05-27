<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Mot de passe oublié 🤔, Aucun problème. Indiquez-nous votre adresse électronique et nous vous enverrons un lien de réinitialisation') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button style=" 
                background-color: #27ae59;
                color: white;
                border: none;
                border-radius: 15px;
                padding: 10px;
                font-size: 12px;
                margin-left: 10px;
                cursor: pointer">
                    {{ __('Envoyer 🚀') }}
                <button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
