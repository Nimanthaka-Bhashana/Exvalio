<x-app-layout>
    <div class="max-w-5xl mx-auto py-8">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-900">Account Settings</h1>
            <p class="text-slate-500">Manage your profile information and security preferences.</p>
        </div>

        <div class="space-y-8">
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-100">
                <div class="max-w-2xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-100">
                <div class="max-w-2xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="bg-red-50/50 p-6 md:p-8 rounded-2xl border border-red-100">
                <div class="max-w-2xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>