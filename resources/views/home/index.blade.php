<x-guest-layout>



 <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 px-4 hero-bg hero-grid-bg">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="animate-slide-up">
                 
                    
                    <h1 class="text-5xl sm:text-5xl lg:text-6xl font-display font-bold mb-6 leading-tight">
                        Empowering <span class="text-gradient">Digital Transformation</span> through<span class="text-gradient"> Intelligent Software.</span>
                    </h1>

                    
                    <p class="text-lg sm:text-xl text-gray-400 mb-8 leading-relaxed">
                        At TechTower Inc, We engineer high-performance applications and scalable platforms to transform how businesses operate, innovate, and thrive in the digital landscape.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#services" class="btn-primary rounded-xl text-center flex items-center justify-center space-x-2">
                            <span>EXPLORE SERVICES</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#portfolio" class="btn-glass rounded-xl text-center">VIEW PORTFOLIO</a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12" x-data="counterStats()" x-ref="statsContainer">
                        <div>
                            <div class="text-3xl sm:text-4xl font-display font-bold text-gradient" x-text="projectsCount + '+'"></div>
                            <div class="text-sm text-gray-400 mt-1">Projects Delivered</div>
                        </div>
                        <div>
                            <div class="text-3xl sm:text-4xl font-display font-bold text-gradient" x-text="satisfactionCount + '%'"></div>
                            <div class="text-sm text-gray-400 mt-1">Client Satisfaction</div>
                        </div>
                        <div>
                            <div class="text-3xl sm:text-4xl font-display font-bold text-gradient">24/7</div>
                            <div class="text-sm text-gray-400 mt-1">Support Available</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content - Carousel (Hidden on Mobile) -->
                <div class="relative hidden lg:block">
                    <div class="glass rounded-3xl overflow-hidden shadow-2xl glow-primary" x-data="carousel()">
                        <div class="relative aspect-[4/3]">
                            <template x-for="(item, index) in items" :key="index">
                                <div x-show="current === index" 
                                     x-transition:enter="transition ease-out duration-500"
                                     x-transition:enter-start="opacity-0 scale-105"
                                     x-transition:enter-end="opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-500"
                                     x-transition:leave-start="opacity-100 scale-100"
                                     x-transition:leave-end="opacity-0 scale-95"
                                     class="absolute inset-0">
                                    <img :src="item.image" :alt="item.title" class="w-full h-full object-cover" loading="eager">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-8">
                                        <div class="inline-block glass px-3 py-1 rounded-full text-xs font-bold mb-3" x-text="item.badge"></div>
                                        <h3 class="text-2xl font-display font-bold mb-2" x-text="item.title"></h3>
                                        <p class="text-sm text-gray-300" x-text="item.description"></p>
                                    </div>
                                </div>
                            </template>
                            
                            <!-- Navigation Dots -->
                            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-10">
                                <template x-for="(item, index) in items" :key="index">
                                    <button @click="current = index" class="w-2 h-2 rounded-full transition-all duration-300" :class="current === index ? 'bg-[--primary] w-8' : 'bg-white/30 hover:bg-white/50'"></button>
                                </template>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute -right-4 top-8 glass px-6 py-3 rounded-2xl animate-float">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-award text-[--primary] text-2xl"></i>
                            <div>
                                <div class="text-xs text-gray-400">This Week's</div>
                                <div class="font-display font-bold">Top Project</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     
    <!-- Services Section -->
    <section id="services" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">Our Core Expertise</span>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
                    Find Your <span class="text-gradient">Perfect Solution</span>
                </h2>
            </div>
            
            <div class="grid  lg:grid-cols-3 gap-6 mb-8" x-data="{ showAll: false }">
                <!-- Featured Service (Large) -->
                <div class="lg:row-span-2 glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[0])">
                    <div class="relative aspect-[3/4] lg:aspect-auto lg:h-full">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Web Development" class="w-full h-full object-cover">
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
                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[1])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" alt="Mobile Apps" class="w-full h-full object-cover">
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
                
                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[2])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c" alt="Software Solutions" class="w-full h-full object-cover">
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
                
                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[3])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa" alt="Cloud Services" class="w-full h-full object-cover">
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
                
                <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[4])">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3" alt="UI/UX Design" class="w-full h-full object-cover">
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
                    <div class="lg:hidden glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openServiceModal(services[5])">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71" alt="Data Analytics" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
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
            
            <div class="text-center" x-data="{ showAll: false }">
                <button @click="showAll = !showAll" class="btn-glass rounded-xl" x-text="showAll ? 'SHOW LESS' : 'VIEW MORE SERVICES'"></button>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 px-4 bg-gradient-to-b from-transparent to-black/30">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-briefcase text-[--primary] text-2xl"></i>
                        <span class="font-display text-sm tracking-wider text-[--primary]">FEATURED WORK</span>
                    </div>
                    <h2 class="text-4xl sm:text-5xl font-display font-bold">
                        Recent <span class="text-gradient">Projects</span>
                    </h2>
                    <p class="text-gray-400 mt-2">Explore our latest successful projects and innovations</p>
                </div>
                <a href="/portfolio.html" class="hidden sm:block btn-primary rounded-xl flex items-center space-x-2">
                    <span>VIEW ALL</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="project in recentProjects" :key="project.id">
                    <div class="glass-hover rounded-3xl overflow-hidden card-product group cursor-pointer" @click="openProjectModal(project)">
                        <div class="relative aspect-[4/3]">
                            <img :src="project.image" :alt="project.title" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                            <span class="badge badge-new" x-text="project.badge"></span>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                                    <i class="far fa-heart text-white"></i>
                                </button>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="flex items-center text-sm mb-3">
                                    <div class="flex items-center text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star-half-alt text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 ml-2" x-text="'(' + project.rating + ')'"></span>
                                </div>
                                <h3 class="text-xl font-display font-bold mb-2" x-text="project.title"></h3>
                                <p class="text-gray-300 text-sm mb-4" x-text="project.description"></p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-400" x-text="project.category"></span>
                                    <span class="text-[--primary] font-display font-bold flex items-center space-x-2">
                                        <span>View Details</span>
                                        <i class="fas fa-arrow-right text-sm transform group-hover:translate-x-1 transition"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            
            <div class="text-center mt-12 sm:hidden">
                <a href="/portfolio.html" class="btn-primary rounded-xl inline-flex items-center space-x-2">
                    <span>VIEW ALL PROJECTS</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Shop Section -->
    <section id="shop" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">TECH STORE</span>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
                    Shop <span class="text-gradient">Our Products</span>
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Premium development tools, templates, and resources for modern developers</p>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <template x-for="product in featuredProducts" :key="product.id">
                    <div class="glass-hover rounded-3xl overflow-hidden card-product">
                        <div class="relative aspect-square">
                            <img :src="product.image" :alt="product.name" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                            <span class="badge" :class="product.badge === 'NEW' ? 'badge-new' : 'badge-sale'" x-text="product.badge"></span>
                            <button @click="toggleWishlist(product.id)" class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                                <i :class="isInWishlist(product.id) ? 'fas fa-heart text-red-500' : 'far fa-heart text-white'"></i>
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
                                <span class="text-gray-400 ml-2" x-text="'(' + product.reviews + ')'"></span>
                            </div>
                            <h3 class="text-lg font-display font-bold mb-2" x-text="product.name"></h3>
                            <div class="flex items-center space-x-2 mb-4">
                                <span class="text-2xl font-display font-bold text-[--primary]" x-text="'$' + product.price"></span>
                                <span x-show="product.oldPrice" class="text-sm text-gray-500 line-through" x-text="product.oldPrice ? '$' + product.oldPrice : ''"></span>
                            </div>
                            <button @click="addToCart(product)" class="w-full btn-primary rounded-xl flex items-center justify-center space-x-2">
                                <i class="fas fa-shopping-cart"></i>
                                <span>ADD TO CART</span>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            
            <div class="text-center mt-12">
                <a href="/shop.html" class="btn-glass rounded-xl inline-block">BROWSE ALL PRODUCTS</a>
            </div>
        </div>
    </section>
    







    
</x-guest-layout>