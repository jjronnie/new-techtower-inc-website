<x-guest-layout>
    <!-- ============================================ -->
    <!-- REGISTER SECTION -->
    <!-- ============================================ -->
    <section class="min-h-screen flex items-center justify-center py-20 px-4 hero-bg hero-grid-bg">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
              
            </div>

            <div class="glass rounded-3xl p-8 sm:p-10">
                <h2 class="text-2xl font-display font-bold text-center mb-2">
                    Create Account
                </h2>
                <p class="text-gray-400 text-center mb-8">
                    Join and start building your collection
                </p>

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Full Name"
                            class="w-full px-6 py-4 input-glass rounded-xl"
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            placeholder="Email Address"
                            class="w-full px-6 py-4 input-glass rounded-xl"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="relative" x-data="{ show: false }">
                        <input
                            id="password"
                            :type="show ? 'text' : 'password'"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Password"
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

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="relative" x-data="{ show: false }">
                        <input
                            id="password_confirmation"
                            :type="show ? 'text' : 'password'"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Confirm Password"
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

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full btn-primary py-4 rounded-xl font-display font-bold tracking-wider"
                    >
                        CREATE ACCOUNT
                    </button>
                </form>

                   <!-- Social login placeholders -->
                <div class="my-8 flex items-center">
                    <div class="flex-1 border-t border-white/10"></div>
                    <span class="px-4 text-sm text-gray-400">OR CONTINUE WITH</span>
                    <div class="flex-1 border-t border-white/10"></div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <button type="button" class="btn-glass py-3 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fab fa-google"></i>
                        <span>GOOGLE</span>
                    </button>

                    <button type="button" class="btn-glass py-3 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fab fa-github"></i>
                        <span>GITHUB</span>
                    </button>
                </div>

                <p class="text-center text-sm text-gray-400 mt-8">
                    Already registered?
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
