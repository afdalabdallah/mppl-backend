<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>
        <p class="mt-1 text-sm text-gray-600">Update your account's profile information and email address.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="no_telp" :value="__('No Telp')" />
            <x-text-input id="no_telp" name="no_telp" type="text" class="mt-1 block w-full" :value="old('name', $user->no_telp)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('no_telp')" />
        </div>
        @if ($user->id_card != null)
            <div>
                <img class="h-[300px] " src="img/profile/{{ $user->id_card }}" />
            </div>
        @endif
        <div>
            <x-input-label for="id_card" :value="__('ID Card')" />
            <x-text-input id="id_card" name="id_card" type="file" class="mt-1 block w-full" :value="old('name', $user->id_card)"
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('id_card')" />
        </div>
        @if ($user->selfie_id != null)
            <div>
                <img class="h-[300px] " src="img/profile/{{ $user->selfie_id }}" />
            </div>
        @endif
        <div>
            <x-input-label for="selfie_id" :value="__('Selfie With ID Card')" />
            <x-text-input id="selfie_id" name="selfie_id" type="file" class="mt-1 block w-full" :value="old('name', $user->selfie_id)"
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('selfie_id')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">Saved.</p>
            @endif
        </div>
    </form>
</section>
