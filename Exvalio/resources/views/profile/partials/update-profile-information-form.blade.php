<section>
    <header class="mb-6">
        <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
            <span class="w-1.5 h-5 bg-blue-500 rounded-full"></span>
            {{ __('Profile Information') }}
        </h2>
        <p class="text-sm text-slate-500">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-5">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Full Name')" class="text-slate-700 font-semibold" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full border-slate-200 focus:ring-blue-500 rounded-xl" :value="old('name', $user->name)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-slate-700 font-semibold" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full border-slate-200 focus:ring-blue-500 rounded-xl" :value="old('email', $user->email)" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-primary-button class="bg-blue-600 hover:bg-blue-700 px-6 py-2.5 rounded-xl shadow-md shadow-blue-100">
                {{ __('Update Profile') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-emerald-600 font-medium">
                    {{ __('Changes saved successfully.') }}
                </p>
            @endif
        </div>
    </form>
</section>