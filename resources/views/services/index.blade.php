<x-guest-layout>

 <section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
    <div class="max-w-7xl mx-auto text-center">
           <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">Our
                    Core Expertise</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
           Our <span class="text-gradient">Professional Services</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            We provide custom software development services including web applications, mobile apps, and cloud solutions built for performance, security, and scale.
        </p>
    </div>
</section>


    <!-- Services Section -->
    <section id="services" class="py-2 px-4">
        <div class="max-w-7xl mx-auto">
           

            <div class="grid  lg:grid-cols-3 gap-6 mb-8" x-data="{ showAll: false }">
                <!-- Featured Service (Large) -->
                <div class="lg:row-span-2 glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                    @click="openServiceModal(services[0])">
                    <div class="relative aspect-[3/4] lg:aspect-auto lg:h-full">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Web Development"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-6 left-6">
                            <i class="fas fa-laptop-code text-[--primary] text-4xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-2xl lg:text-3xl font-display font-bold mb-3">Web Development</h3>
                            <div class="flex items-center text-sm text-gray-400">
                                <span>150+ projects</span>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Cards (4 in 2x2) -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                    @click="openServiceModal(services[1])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" alt="Mobile Apps"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <i class="fas fa-mobile-alt text-[--primary] text-2xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-display font-bold mb-2">Mobile Apps</h3>
                            <p class="text-sm text-gray-400">120+ projects</p>
                        </div>
                    </div>
                </div>

                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                    @click="openServiceModal(services[2])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c" alt="Software Solutions"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <i class="fas fa-code text-[--primary] text-2xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-display font-bold mb-2">Custom Software</h3>
                            <p class="text-sm text-gray-400">200+ projects</p>
                        </div>
                    </div>
                </div>

                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                    @click="openServiceModal(services[3])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa" alt="Cloud Services"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <i class="fas fa-cloud text-[--primary] text-2xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-display font-bold mb-2">Cloud Solutions</h3>
                            <p class="text-sm text-gray-400">180+ projects</p>
                        </div>
                    </div>
                </div>

                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                    @click="openServiceModal(services[4])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" alt="UI/UX Design"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <i class="fas fa-paint-brush text-[--primary] text-2xl"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-display font-bold mb-2">UI/UX Design</h3>
                            <p class="text-sm text-gray-400">250+ projects</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Services (Hidden by Default on Desktop) -->
                <template x-if="showAll">
                    <div class="lg:hidden glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer"
                        @click="openServiceModal(services[5])">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" alt="Data Analytics"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent">
                            </div>
                            <div class="absolute top-4 left-4">
                                <i class="fas fa-chart-line text-[--primary] text-2xl"></i>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-xl font-display font-bold mb-2">Data Analytics</h3>
                                <p class="text-sm text-gray-400">90+ projects</p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

           
        </div>
    </section>

</x-guest-layout>
