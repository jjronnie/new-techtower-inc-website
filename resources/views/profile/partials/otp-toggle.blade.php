<div class="glass rounded-3xl p-8 sm:p-10">
    <header class="mb-8">
        <h2 class="text-2xl font-display font-bold text-white">
            Two-Factor Authentication
        </h2>

        <p class="mt-2 text-sm text-gray-400">
            Add an extra layer of security to your account by enabling two-factor authentication. You will be sent a one-time password (OTP) to verify your identity on each Login.
        </p>
    </header>

    <form method="POST" action="{{ route('toggle2fa') }}" class="flex items-center justify-between">
        @csrf
        <label>
            <input type="checkbox" name="mfa_enabled" class="rounded mr-2  border-gray-300 text-orange-600 shadow-sm focus:ring-orange-500" value="1" {{ $user->mfa_enabled ? 'checked' : '' }}>
            Enable Two-Factor Authentication
        </label>
        

        <button type="submit" class="btn-primary px-8 py-2 rounded-xl font-display font-bold tracking-wider">
            SAVE
        </button>
    </form>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif
</div>
