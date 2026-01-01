<x-guest-layout>

    <section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
        <div class="max-w-7xl mx-auto text-center">
            <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">
                Shop With Us</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold mb-6">
                Shop From <span class="text-gradient">Our Collection</span>
            </h1>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                Explore our curated selection of premium products.
            </p>
        </div>
    </section>




    <section class="py-2 px-4">
        <div class="max-w-7xl mx-auto">
            

            <!-- Filters & Search -->
            <div class="flex flex-col lg:flex-row gap-6 mb-12">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" placeholder="Search models..."
                            class="w-full px-6 py-4 input-glass rounded-xl pr-12">
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="flex gap-4">
                    <select class="px-6 py-4 input-glass rounded-xl">
                        <option>Newest First</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Most Popular</option>
                    </select>
                    <div class="flex gap-2">
                        <button class="w-12 h-12 rounded-xl btn-primary flex items-center justify-center">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="w-12 h-12 rounded-xl btn-glass flex items-center justify-center">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="flex flex-wrap gap-3 mb-12">
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm bg-[--primary] text-black">
                    <i class="fas fa-filter mr-2"></i>All
                </button>
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm">
                    <i class="fas fa-car mr-2"></i>Cars
                </button>
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm">
                    <i class="fas fa-truck mr-2"></i>Trucks
                </button>
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm">
                    <i class="fas fa-plane mr-2"></i>Planes
                </button>
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm">
                    <i class="fas fa-tools mr-2"></i>Accessories
                </button>
                <button class="glass-hover px-6 py-3 rounded-xl font-display text-sm">
                    <i class="fas fa-gem mr-2"></i>Collectibles
                </button>
            </div>

            <div class="text-gray-400 mb-6">Showing <span class="text-white font-display">12</span> products</div>

            <!-- Products Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Product Card 1 -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product">
                    <div class="relative aspect-square">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product"
                            class="w-full h-full object-cover">
                        <span class="badge badge-new">NEW</span>
                        <span class="badge badge-sale" style="top: 3.5rem;">SALE</span>
                        <button
                            class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm mb-2">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="far fa-star text-xs"></i>
                            </div>
                            <span class="text-gray-400 ml-2">(127)</span>
                        </div>
                        <h3 class="text-lg font-display font-bold mb-2">Ferrari SF90 Stradale 1:18</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-2xl font-display font-bold text-[--primary]">$249.99</span>
                            <span class="text-sm text-gray-500 line-through">$299.99</span>
                        </div>
                        <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span>ADD TO CART</span>
                        </button>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product">
                    <div class="relative aspect-square">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Product"
                            class="w-full h-full object-cover">
                        <span class="badge badge-new">NEW</span>
                        <button
                            class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm mb-2">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="far fa-star text-xs"></i>
                            </div>
                            <span class="text-gray-400 ml-2">(234)</span>
                        </div>
                        <h3 class="text-lg font-display font-bold mb-2">Tesla Cybertruck 1:24</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-2xl font-display font-bold text-[--primary]">$129.99</span>
                        </div>
                        <div class="flex gap-2">
                            <button class="flex-1 btn-primary py-3 rounded-xl flex items-center justify-center">
                                <i class="fas fa-minus mr-2"></i>
                                <span class="font-display font-bold">1</span>
                                <i class="fas fa-plus ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product">
                    <div class="relative aspect-square">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" alt="Product"
                            class="w-full h-full object-cover">
                        <button
                            class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fas fa-heart text-red-500"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm mb-2">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="far fa-star text-xs"></i>
                            </div>
                            <span class="text-gray-400 ml-2">(89)</span>
                        </div>
                        <h3 class="text-lg font-display font-bold mb-2">Lamborghini Huracán EVO 1:24</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-2xl font-display font-bold text-[--primary]">$89.99</span>
                        </div>
                        <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span>ADD TO CART</span>
                        </button>
                    </div>
                </div>

                <!-- Product Card 4 (Auction) -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product">
                    <div class="relative aspect-square">
                        <img src="https://images.unsplash.com/photo-1558655146-364adaf1fcc9" alt="Product"
                            class="w-full h-full object-cover">
                        <span class="badge badge-auction">AUCTION</span>
                        <button
                            class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="far fa-heart"></i>
                        </button>
                        <div class="absolute bottom-4 left-4 glass px-3 py-1 rounded-full text-xs font-display">
                            <i class="fas fa-clock mr-1 text-[--primary]"></i>
                            <span class="font-bold">-362d -18h</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm mb-2">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="far fa-star text-xs"></i>
                            </div>
                            <span class="text-gray-400 ml-2">(156)</span>
                        </div>
                        <h3 class="text-lg font-display font-bold mb-2">Porsche 911 GT3 RS 1:18</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-2xl font-display font-bold text-[--primary]">$175.00</span>
                        </div>
                        <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                            <i class="fas fa-gavel"></i>
                            <span>PLACE BID</span>
                        </button>
                    </div>
                </div>

                <!-- Repeat more products... -->
                <div class="glass-hover rounded-3xl overflow-hidden card-product">
                    <div class="relative aspect-square">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" alt="Product"
                            class="w-full h-full object-cover">
                        <button
                            class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm mb-2">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                                <i class="fas fa-star text-xs"></i>
                            </div>
                            <span class="text-gray-400 ml-2">(345)</span>
                        </div>
                        <h3 class="text-lg font-display font-bold mb-2">BMW M4 Competition 1:18</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <span class="text-2xl font-display font-bold text-[--primary]">$199.99</span>
                        </div>
                        <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span>ADD TO CART</span>
                        </button>
                    </div>
                </div>

                <!-- Add more product cards as needed -->
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-center space-x-2">
                <button
                    class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="w-10 h-10 rounded-xl bg-[--primary] text-black font-display font-bold">1</button>
                <button
                    class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">2</button>
                <button
                    class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">3</button>
                <button
                    class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">4</button>
                <button
                    class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>




</x-guest-layout>
