<section class="glass rounded-3xl p-8 sm:p-10">
    <header class="mb-8">
        <h2 class="text-2xl font-display font-bold text-white">
            Profile Information
        </h2>

        <p class="mt-2 text-sm text-gray-400">
            Update your account profile information and email address.
        </p>
    </header>

    <!-- Hidden resend verification form -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm text-gray-300 mb-2">
                Name
            </label>

            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
                class="w-full px-6 py-4 input-glass rounded-xl"
            />

            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm text-gray-300 mb-2">
                Email
            </label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
                class="w-full px-6 py-4 input-glass rounded-xl"
            />

            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 text-sm text-gray-400">
                    <p>
                        Your email address is unverified.
                    </p>

                    <button
                        form="send-verification"
                        type="submit"
                        class="mt-1 text-[--primary] hover:underline"
                    >
                        Re-send verification email
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm text-green-400">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <button
                type="submit"
                class="btn-primary px-8 py-3 rounded-xl font-display font-bold tracking-wider"
            >
                SAVE CHANGES
            </button>

            @if (session('status') === 'profile-updated')
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
