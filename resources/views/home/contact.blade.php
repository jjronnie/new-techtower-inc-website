<x-guest-layout>

    <section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
        <div class="max-w-7xl mx-auto text-center">
            <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">Our
                Get In Touch</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold mb-6">
                Let's Build <span class="text-gradient">Something Amazing </span>Together


            </h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Have a project in mind, a question, or just want to learn more? Our team is ready to assist you.
            </p>
        </div>
    </section>


    <section class="py-2 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="glass rounded-3xl p-8 sm:p-12">
                    <h2 class="text-3xl font-display font-bold mb-8">Send us a Message</h2>
                    <form class="space-y-6" @submit.prevent="submitContact()">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">NAME</label>
                                <input type="text" placeholder="John Doe" required
                                    class="w-full px-6 py-4 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">EMAIL</label>
                                <input type="email" placeholder="john@example.com" required
                                    class="w-full px-6 py-4 input-glass rounded-xl">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-display mb-2 text-gray-300">SUBJECT</label>
                            <input type="text" placeholder="How can we help?" required
                                class="w-full px-6 py-4 input-glass rounded-xl">
                        </div>
                        <div>
                            <label class="block text-sm font-display mb-2 text-gray-300">MESSAGE</label>
                            <textarea rows="6" placeholder="Tell us more about your inquiry..." required
                                class="w-full px-6 py-4 input-glass rounded-xl resize-none"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full btn-primary py-4 rounded-xl flex items-center justify-center space-x-2">
                            <i class="fas fa-paper-plane"></i>
                            <span>SEND MESSAGE</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">


                    <div class="glass-hover rounded-3xl p-8">
                        <div class="w-14 h-14 rounded-2xl bg-[--primary]/10 flex items-center justify-center mb-4">
                            <i class="fas fa-phone text-[--primary] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold mb-2">Call Us</h3>
                        <p class="text-gray-400">
                           +256 703 283 529<br>
                            +256 774 272 820
                        </p>
                    </div>

                    <div class="glass-hover rounded-3xl p-8">
                        <div class="w-14 h-14 rounded-2xl bg-[--primary]/10 flex items-center justify-center mb-4">
                            <i class="fas fa-envelope text-[--primary] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold mb-2">Email Us</h3>
                        <p class="text-gray-400">
                           info@techtowerinc.com<br>
                            support@techtowerinc.com
                        </p>
                    </div>

                    <div class="glass-hover rounded-3xl p-8">
                        <div class="w-14 h-14 rounded-2xl bg-[--primary]/10 flex items-center justify-center mb-4">
                            <i class="fas fa-map-marker-alt text-[--primary] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold mb-2">Postal Address</h3>
                        <p class="text-gray-400">
                            P.O BOX 118290<br>
                            Wakiso, Uganda
                        </p>
                    </div>


                    <div class="glass-hover rounded-3xl p-8">
                        <div class="w-14 h-14 rounded-2xl bg-[--primary]/10 flex items-center justify-center mb-4">
                            <i class="fas fa-clock text-[--primary] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-display font-bold mb-2">Business Hours</h3>
                        <p class="text-gray-400">
                            Mon-Fri: 8am-8pm<br>
                           Online 24/7
                        </p>
                    </div>

                    <!-- Map spans full row on desktop -->
                    <div class="glass rounded-3xl overflow-hidden h-64 lg:col-span-2">
                       

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7450457028526!2d32.64706737459096!3d0.34724706397876154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ea040c2420f1ef%3A0x63678055f8d8ea35!2sTechTower%20Innovations%20Inc.!5e0!3m2!1sen!2sug!4v1767299164730!5m2!1sen!2sug"
                            class="w-full h-full border-0" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

            </div>
        </div>
    </section>


</x-guest-layout>
