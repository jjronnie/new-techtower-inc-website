  <!-- Newsletter Section -->
    <section class="py-20 px-4">
        <div class="max-w-4xl mx-auto">
            <div class="glass rounded-3xl p-8 sm:p-12 text-center">
                <h2 class="text-3xl sm:text-4xl font-display font-bold mb-4">
                    Join the <span class="text-gradient">Tech Community</span>
                </h2>
                <p class="text-gray-400 mb-8">Get exclusive updates, early access to new services, and tech insights delivered to your inbox.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto" @submit.prevent="subscribe()">
                    <input type="email" x-model="email" placeholder="Enter your email" required class="flex-1 px-6 py-4 input-glass rounded-xl">
                    <button type="submit" class="btn-primary rounded-xl whitespace-nowrap">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </section>