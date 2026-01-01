<x-guest-layout>
    <!-- ============================================ -->
    <!-- OTP VERIFICATION SECTION -->
    <!-- ============================================ -->
    <section class="min-h-screen flex items-center justify-center py-20 px-4 hero-bg hero-grid-bg">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                
            </div>

            <div class="glass rounded-3xl p-8 sm:p-10">
                <h2 class="text-2xl font-display font-bold text-center mb-2">
                    Verify OTP
                </h2>

                <p class="text-gray-400 text-center mb-8">
                    Enter the 6 digit code sent to your email or phone.
                </p>

                @if (session('status'))
                    <div class="mb-6 text-sm text-green-400 text-center font-medium">
                        {{ session('status') }}
                    </div>
                @endif

                <form
                    method="POST"
                    action="#"
                    class="space-y-8"
                    x-data="otpInput()"
                >
                    @csrf

                    <!-- OTP Inputs -->
                    <div class="flex justify-between gap-2">
                        <template x-for="(digit, index) in digits" :key="index">
                            <input
                                type="text"
                                inputmode="numeric"
                                maxlength="1"
                                class="w-12 h-14 text-center text-xl font-bold input-glass rounded-xl"
                                x-model="digits[index]"
                                @input="moveNext(index, $event)"
                                @keydown.backspace="moveBack(index, $event)"
                            />
                        </template>
                    </div>

                    <!-- Hidden OTP -->
                    <input type="hidden" name="otp" :value="digits.join('')" />

                    <x-input-error :messages="$errors->get('otp')" class="mt-2 text-center" />

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full btn-primary py-4 rounded-xl font-display font-bold tracking-wider"
                        :disabled="digits.join('').length !== 6"
                    >
                        VERIFY CODE
                    </button>
                </form>

                <p class="text-center text-sm text-gray-400 mt-8">
                    Didn’t get a code?
                    <a href="#" class="text-[--primary] hover:underline">
                        Resend
                    </a>
                </p>
            </div>

            <div class="text-center mt-8">
                <a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition">
                    Back to home
                </a>
            </div>
        </div>
    </section>

    <!-- Alpine OTP Logic -->
    <script>
        function otpInput() {
            return {
                digits: ['', '', '', '', '', ''],

                moveNext(index, event) {
                    const value = event.target.value.replace(/[^0-9]/g, '');
                    this.digits[index] = value;

                    if (value && index < 5) {
                        event.target.nextElementSibling?.focus();
                    }
                },

                moveBack(index, event) {
                    if (!this.digits[index] && index > 0) {
                        event.target.previousElementSibling?.focus();
                    }
                }
            }
        }
    </script>
</x-guest-layout>
