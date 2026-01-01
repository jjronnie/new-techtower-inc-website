<x-guest-layout>
    <!-- ============================================ -->
    <!-- FORGOT PASSWORD SECTION -->
    <!-- ============================================ -->
    <section class="min-h-screen flex items-center justify-center py-20 px-4 hero-bg hero-grid-bg">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                {{-- <h1 class="text-3xl font-display font-bold mb-2">
                    <span class="text-gradient">TECH</span><span class="text-white">TOWER</span>
                </h1> --}}
            </div>

            <div class="glass rounded-3xl p-8 sm:p-10">
                <h2 class="text-2xl font-display font-bold text-center mb-4">
                    Reset Password
                </h2>

                <p class="text-gray-400 text-center mb-8">
                    Forgot your password? Enter your email and we will send you a reset link.
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-6 text-center" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            placeholder="Email Address"
                            class="w-full px-6 py-4 input-glass rounded-xl"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full btn-primary py-4 rounded-xl font-display font-bold tracking-wider"
                    >
                        EMAIL RESET LINK
                    </button>
                </form>

                <p class="text-center text-sm text-gray-400 mt-8">
                    Remembered your password?
                    <a href="{{ route('login') }}" class="text-[--primary] hover:underline">
                        Sign in
                    </a>
                </p>
            </div>

            <div class="text-center mt-8">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition flex items-center justify-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back to home</span>
                </a>
            </div>
        </div>
    </section>
</x-guest-layout>
