<section class="glass rounded-3xl p-8 sm:p-10">
    <header class="mb-8">
        <h2 class="text-2xl font-display font-bold text-white">
            Update Password
        </h2>

        <p class="mt-2 text-sm text-gray-400">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="relative" x-data="{ show: false }">
            <label for="update_password_current_password" class="block text-sm text-gray-300 mb-2">
                Current Password
            </label>

            <input
                id="update_password_current_password"
                name="current_password"
                :type="show ? 'text' : 'password'"
                autocomplete="current-password"
                required
                class="w-full px-6 py-4 input-glass rounded-xl pr-12"
            />

            <button
                type="button"
                @click="show = !show"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white"
                aria-label="Toggle password visibility"
            >
                <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
            </button>

            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="relative" x-data="{ show: false }">
            <label for="update_password_password" class="block text-sm text-gray-300 mb-2">
                New Password
            </label>

            <input
                id="update_password_password"
                name="password"
                :type="show ? 'text' : 'password'"
                autocomplete="new-password"
                required
                class="w-full px-6 py-4 input-glass rounded-xl pr-12"
            />

            <button
                type="button"
                @click="show = !show"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white"
                aria-label="Toggle password visibility"
            >
                <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
            </button>

            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="relative" x-data="{ show: false }">
            <label for="update_password_password_confirmation" class="block text-sm text-gray-300 mb-2">
                Confirm Password
            </label>

            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                :type="show ? 'text' : 'password'"
                autocomplete="new-password"
                required
                class="w-full px-6 py-4 input-glass rounded-xl pr-12"
            />

            <button
                type="button"
                @click="show = !show"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white"
                aria-label="Toggle password visibility"
            >
                <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
            </button>

            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <button
                type="submit"
                class="btn-primary px-8 py-3 rounded-xl font-display font-bold tracking-wider"
            >
                SAVE CHANGES
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400"
                >
                    Saved.
                </p>
            @endif
        </div>
    </form>
</section>
