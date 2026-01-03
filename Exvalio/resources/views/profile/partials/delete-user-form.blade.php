<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-red-600">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-slate-600 leading-relaxed">
            {{ __('Once your account is deleted, all of its resources and data will be permanently removed. Please download any data you wish to retain before proceeding.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="rounded-xl px-6 py-2.5"
    >{{ __('Permanently Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8">
            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-slate-900">
                {{ __('Are you sure?') }}
            </h2>

            <p class="mt-3 text-sm text-slate-600">
                {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full rounded-xl border-slate-200"
                    placeholder="{{ __('Verify Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-8 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')" class="rounded-xl px-6">
                    {{ __('Go Back') }}
                </x-secondary-button>

                <x-danger-button class="rounded-xl px-6">
                    {{ __('Delete Everything') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>