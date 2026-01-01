<x-guest-layout>
    <!-- ============================================ -->
    <!-- EMAIL VERIFICATION SECTION -->
    <!-- ============================================ -->
    <section class="min-h-screen flex items-center justify-center py-20 px-4 hero-bg hero-grid-bg">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
               
            </div>

            <div class="glass rounded-3xl p-8 sm:p-10">
                <h2 class="text-2xl font-display font-bold text-center mb-4">
                    Verify Your Email
                </h2>

                <p class="text-gray-400 text-center mb-6">
                    Thanks for signing up. Before getting started, please verify your email
                    address by clicking the link we just sent to you.
                    If you did not receive the email, you can request another one.
                </p>

                @if (session('status') === 'verification-link-sent')
                    <div class="mb-6 text-sm text-green-400 text-center font-medium">
                        A new verification link has been sent to your email address.
                    </div>
                @endif

                <div class="flex flex-col gap-4">
                    <!-- Resend verification -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <button
                            type="submit"
                            class="w-full btn-primary py-4 rounded-xl font-display font-bold tracking-wider"
                        >
                            RESEND VERIFICATION EMAIL
                        </button>
                    </form>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="w-full btn-glass py-3 rounded-xl text-sm text-gray-300 hover:text-white"
                        >
                            LOG OUT
                        </button>
                    </form>
                </div>
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
