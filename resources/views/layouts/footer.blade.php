  @include('layouts.newsletter')
  
  
  <!-- Footer -->
    <footer class="border-t border-white/10 py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div>
                    <div class="text-2xl font-display font-bold mb-4">
                        <span class="text-gradient">TECH</span><span class="text-white">TOWER</span>
                    </div>
                    <p class="text-gray-400 mb-6">Innovative software solutions for modern businesses. Transform your digital presence with cutting-edge technology.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="font-display font-bold text-lg mb-4">SERVICES</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Custom Software</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cloud Solutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">UI/UX Design</a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div>
                    <h3 class="font-display font-bold text-lg mb-4">SUPPORT</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Documentation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Support Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Track Order</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="font-display font-bold text-lg mb-4">CONTACT</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-[--primary] mt-1"></i>
                            <span class="text-gray-400">123 Tech Street<br>Innovation City, TC 10001</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-[--primary]"></i>
                            <span class="text-gray-400">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-[--primary]"></i>
                            <span class="text-gray-400">hello@techtower.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <p class="text-gray-400 text-sm">© 2025 TechTower Inc. All rights reserved.</p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <button id="backToTop" @click="scrollToTop()" class="btn-primary glow-primary">
        <i class="fas fa-arrow-up"></i>
    </button>



   
    <!-- Service Modal -->
    <div x-show="serviceModalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 overflow-y-auto hide-scrollbar" 
         style="display: none;">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm" @click="serviceModalOpen = false"></div>
        <div class="glass rounded-3xl max-w-4xl w-full max-h-[90vh] my-4 overflow-hidden relative flex flex-col lg:flex-row">
            <button @click="serviceModalOpen = false" class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition z-10">
                <i class="fas fa-times"></i>
            </button>
            <template x-if="currentService">
                <div class="flex flex-col lg:flex-row w-full h-full">
                    <!-- Image Section -->
                    <div class="lg:w-1/2 w-full lg:h-auto h-64 flex-shrink-0">
                        <img :src="currentService.image" :alt="currentService.name" class="w-full h-full object-cover lg:rounded-l-3xl rounded-t-3xl lg:rounded-tr-none">
                    </div>
                    <!-- Content Section -->
                    <div class="lg:w-1/2 w-full p-6 lg:p-8 overflow-y-auto hide-scrollbar flex flex-col">
                        <div class="flex items-center text-sm mb-4">
                            <div class="flex items-center text-yellow-400">
                                <i class="fas fa-star text-sm"></i>
                                <i class="fas fa-star text-sm"></i>
                                <i class="fas fa-star text-sm"></i>
                                <i class="fas fa-star text-sm"></i>
                                <i class="fas fa-star-half-alt text-sm"></i>
                            </div>
                            <span class="text-gray-400 ml-2" x-text="'(' + currentService.reviews + ' reviews)'"></span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-display font-bold mb-4" x-text="currentService.name"></h2>
                        <p class="text-gray-400 mb-6 text-sm lg:text-base" x-text="currentService.fullDescription"></p>
                        <div class="grid sm:grid-cols-3 gap-4 mb-6">
                            <div class="glass p-4 rounded-xl text-center">
                                <i class="fas fa-clock text-[--primary] text-2xl mb-2"></i>
                                <div class="text-sm text-gray-400">Delivery</div>
                                <div class="font-display font-bold text-sm" x-text="currentService.delivery"></div>
                            </div>
                            <div class="glass p-4 rounded-xl text-center">
                                <i class="fas fa-shield-alt text-[--primary] text-2xl mb-2"></i>
                                <div class="text-sm text-gray-400">Guarantee</div>
                                <div class="font-display font-bold text-sm">100%</div>
                            </div>
                            <div class="glass p-4 rounded-xl text-center">
                                <i class="fas fa-headset text-[--primary] text-2xl mb-2"></i>
                                <div class="text-sm text-gray-400">Support</div>
                                <div class="font-display font-bold text-sm">24/7</div>
                            </div>
                        </div>
                        <a :href="'/service-details.html?id=' + currentService.id" class="btn-primary w-full rounded-xl flex items-center justify-center space-x-2 mt-auto">
                            <span>VIEW FULL DETAILS</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </template>
        </div>
    </div>
    
    <!-- Project Modal -->
    <div x-show="projectModalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 overflow-y-auto hide-scrollbar" 
         style="display: none;">
        <div class="fixed inset-0 bg-black/90 backdrop-blur-sm" @click="projectModalOpen = false"></div>
        <div class="glass rounded-3xl max-w-4xl w-full max-h-[90vh] my-4 overflow-hidden relative flex flex-col lg:flex-row">
            <button @click="projectModalOpen = false" class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition z-10">
                <i class="fas fa-times"></i>
            </button>
            <template x-if="currentProject">
                <div class="flex flex-col lg:flex-row w-full h-full">
                    <!-- Image Section -->
                    <div class="lg:w-1/2 w-full lg:h-auto h-64 flex-shrink-0">
                        <img :src="currentProject.image" :alt="currentProject.title" class="w-full h-full object-cover lg:rounded-l-3xl rounded-t-3xl lg:rounded-tr-none">
                    </div>
                    <!-- Content Section -->
                    <div class="lg:w-1/2 w-full p-6 lg:p-8 overflow-y-auto hide-scrollbar flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                            <span class="glass px-3 py-1 rounded-full text-sm font-display" x-text="currentProject.category"></span>
                            <div class="flex items-center text-sm">
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star text-sm"></i>
                                    <i class="fas fa-star text-sm"></i>
                                    <i class="fas fa-star text-sm"></i>
                                    <i class="fas fa-star text-sm"></i>
                                    <i class="fas fa-star-half-alt text-sm"></i>
                                </div>
                                <span class="text-gray-400 ml-2" x-text="'(' + currentProject.rating + ')'"></span>
                            </div>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-display font-bold mb-4" x-text="currentProject.title"></h2>
                        <p class="text-gray-400 mb-6 text-sm lg:text-base" x-text="currentProject.fullDescription"></p>
                        <div class="grid sm:grid-cols-2 gap-4 mb-6">
                            <div class="glass p-4 rounded-xl">
                                <div class="text-sm text-gray-400 mb-1">Client</div>
                                <div class="font-display font-bold text-sm" x-text="currentProject.client"></div>
                            </div>
                            <div class="glass p-4 rounded-xl">
                                <div class="text-sm text-gray-400 mb-1">Duration</div>
                                <div class="font-display font-bold text-sm" x-text="currentProject.duration"></div>
                            </div>
                        </div>
                        <a :href="'/project-details.html?id=' + currentProject.id" class="btn-primary w-full rounded-xl flex items-center justify-center space-x-2 mt-auto">
                            <span>VIEW PROJECT</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </template>
        </div>
    </div>
    
    <script>
        function app() {
            return {
                mobileMenuOpen: false,
                searchOpen: false,
                serviceModalOpen: false,
                projectModalOpen: false,
                currentService: null,
                currentProject: null,
                cartCount: 0,
                wishlistCount: 0,
                email: '',
                cart: [],
                wishlist: [],
                
                services: [
                    {
                        id: 1,
                        name: 'Web Development',
                        image: 'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
                        icon: 'laptop-code',
                        reviews: 150,
                        fullDescription: 'Create stunning, responsive websites that drive engagement and conversions. Our expert team uses the latest technologies to build fast, secure, and scalable web solutions tailored to your business needs.',
                        delivery: '2-4 weeks'
                    },
                    {
                        id: 2,
                        name: 'Mobile Apps',
                        image: 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c',
                        icon: 'mobile-alt',
                        reviews: 120,
                        fullDescription: 'Transform your ideas into powerful mobile applications for iOS and Android. We design intuitive, high-performance apps that users love and businesses depend on.',
                        delivery: '3-6 weeks'
                    },
                    {
                        id: 3,
                        name: 'Custom Software',
                        image: 'https://images.unsplash.com/photo-1555949963-aa79dcee981c',
                        icon: 'code',
                        reviews: 200,
                        fullDescription: 'Build custom software solutions that automate processes and solve complex business challenges. From enterprise systems to specialized applications, we deliver excellence.',
                        delivery: '4-8 weeks'
                    },
                    {
                        id: 4,
                        name: 'Cloud Solutions',
                        image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa',
                        icon: 'cloud',
                        reviews: 180,
                        fullDescription: 'Migrate to the cloud with confidence. Our cloud architects design scalable, secure infrastructure that grows with your business while reducing costs.',
                        delivery: '2-5 weeks'
                    },
                    {
                        id: 5,
                        name: 'UI/UX Design',
                        image: 'https://images.unsplash.com/photo-1563986768609-322da13575f3',
                        icon: 'paint-brush',
                        reviews: 250,
                        fullDescription: 'Create memorable user experiences with our design expertise. We combine beautiful aesthetics with intuitive functionality to delight your users.',
                        delivery: '1-3 weeks'
                    },
                    {
                        id: 6,
                        name: 'Data Analytics',
                        image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
                        icon: 'chart-line',
                        reviews: 90,
                        fullDescription: 'Unlock insights from your data with advanced analytics solutions. Make data-driven decisions that propel your business forward.',
                        delivery: '2-4 weeks'
                    }
                ],
                
                recentProjects: [
                    {
                        id: 1,
                        title: 'E-Commerce Platform',
                        description: 'Modern online shopping experience with AI recommendations',
                        image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                        category: 'Web Development',
                        rating: 89,
                        badge: 'FEATURED',
                        client: 'RetailCo',
                        duration: '3 months',
                        fullDescription: 'Built a comprehensive e-commerce platform with advanced features including AI-powered product recommendations, seamless checkout process, and robust inventory management system.'
                    },
                    {
                        id: 2,
                        title: 'Fitness Tracking App',
                        description: 'Track workouts, nutrition, and achieve your fitness goals',
                        image: 'https://images.unsplash.com/photo-1461773518188-b3e86f98242f',
                        category: 'Mobile App',
                        rating: 127,
                        badge: 'NEW',
                        client: 'FitLife',
                        duration: '4 months',
                        fullDescription: 'Developed a feature-rich fitness application with workout tracking, meal planning, progress visualization, and social features to keep users motivated.'
                    },
                    {
                        id: 3,
                        title: 'Business Analytics Dashboard',
                        description: 'Real-time insights and data visualization for decision makers',
                        image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
                        category: 'Custom Software',
                        rating: 156,
                        badge: 'FEATURED',
                        client: 'DataCorp',
                        duration: '5 months',
                        fullDescription: 'Created an enterprise-grade analytics platform with real-time data processing, customizable dashboards, and predictive analytics capabilities.'
                    }
                ],
                
                featuredProducts: [
                    {
                        id: 1,
                        name: 'Premium UI Kit',
                        price: 249.99,
                        oldPrice: 299.99,
                        image: 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8',
                        badge: 'NEW',
                        reviews: 127
                    },
                    {
                        id: 2,
                        name: 'React Dashboard',
                        price: 129.99,
                        image: 'https://images.unsplash.com/photo-1551650975-87deedd944c3',
                        badge: 'SALE',
                        reviews: 234
                    },
                    {
                        id: 3,
                        name: 'Mobile App Template',
                        price: 89.99,
                        image: 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c',
                        badge: 'NEW',
                        reviews: 89
                    },
                    {
                        id: 4,
                        name: 'Icon Library Pro',
                        price: 59.99,
                        oldPrice: 79.99,
                        image: 'https://images.unsplash.com/photo-1558655146-364adaf1fcc9',
                        badge: 'SALE',
                        reviews: 156
                    }
                ],
                
                init() {
                    // Load cart and wishlist from localStorage
                    const savedCart = localStorage.getItem('cart');
                    const savedWishlist = localStorage.getItem('wishlist');
                    if (savedCart) {
                        this.cart = JSON.parse(savedCart);
                        this.cartCount = this.cart.length;
                    }
                    if (savedWishlist) {
                        this.wishlist = JSON.parse(savedWishlist);
                        this.wishlistCount = this.wishlist.length;
                    }
                },
                
                handleScroll() {
                    const backToTop = document.getElementById('backToTop');
                    if (window.pageYOffset > 300) {
                        backToTop.classList.add('show');
                    } else {
                        backToTop.classList.remove('show');
                    }
                },
                
                scrollToTop() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                },
                
                toggleSearch() {
                    this.searchOpen = !this.searchOpen;
                },
                
                openServiceModal(service) {
                    this.currentService = service;
                    this.serviceModalOpen = true;
                },
                
                openProjectModal(project) {
                    this.currentProject = project;
                    this.projectModalOpen = true;
                },
                
                addToCart(product) {
                    this.cart.push(product);
                    this.cartCount = this.cart.length;
                    localStorage.setItem('cart', JSON.stringify(this.cart));
                    this.showNotification('Product added to cart!');
                },
                
                toggleWishlist(productId) {
                    const index = this.wishlist.indexOf(productId);
                    if (index > -1) {
                        this.wishlist.splice(index, 1);
                        this.showNotification('Removed from wishlist');
                    } else {
                        this.wishlist.push(productId);
                        this.showNotification('Added to wishlist!');
                    }
                    this.wishlistCount = this.wishlist.length;
                    localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
                },
                
                isInWishlist(productId) {
                    return this.wishlist.includes(productId);
                },
                
                subscribe() {
                    if (this.email) {
                        this.showNotification('Successfully subscribed!');
                        this.email = '';
                    }
                },
                
                showNotification(message) {
                    const notification = document.getElementById('notification');
                    const notificationText = document.getElementById('notificationText');
                    notificationText.textContent = message;
                    notification.classList.add('show');
                    setTimeout(() => {
                        notification.classList.remove('show');
                    }, 3000);
                }
            }
        }
        
        function carousel() {
            return {
                current: 0,
                items: [
                    {
                        image: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97',
                        title: 'E-Commerce Platform',
                        description: 'Modern online shopping experience',
                        badge: 'FEATURED'
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1551650975-87deedd944c3',
                        title: 'Mobile Banking App',
                        description: 'Secure financial management',
                        badge: 'NEW'
                    },
                    {
                        image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f',
                        title: 'Analytics Dashboard',
                        description: 'Real-time business insights',
                        badge: 'POPULAR'
                    }
                ],
                init() {
                    setInterval(() => {
                        this.current = (this.current + 1) % this.items.length;
                    }, 5000);
                }
            }
        }
        
        function counterStats() {
            return {
                projectsCount: 0,
                satisfactionCount: 0,
                hasStarted: false,
                
                init() {
                    // Use Intersection Observer to detect when element is visible
                    const self = this;
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting && !self.hasStarted) {
                                self.startCounting();
                            }
                        });
                    }, { 
                        threshold: 0.3,
                        rootMargin: '0px'
                    });
                    
                    // Observe the stats container after DOM is ready
                    this.$nextTick(() => {
                        const statsEl = this.$refs.statsContainer;
                        if (statsEl) {
                            observer.observe(statsEl);
                        }
                    });
                },
                
                startCounting() {
                    if (this.hasStarted) return;
                    this.hasStarted = true;
                    
                    // Animate projects count from 0 to 500
                    const projectsTarget = 500;
                    const projectsDuration = 2000; // 2 seconds
                    const projectsSteps = 50;
                    const projectsIncrement = projectsTarget / projectsSteps;
                    const projectsInterval = projectsDuration / projectsSteps;
                    
                    let projectsCurrent = 0;
                    const projectsTimer = setInterval(() => {
                        projectsCurrent += projectsIncrement;
                        if (projectsCurrent >= projectsTarget) {
                            this.projectsCount = projectsTarget;
                            clearInterval(projectsTimer);
                        } else {
                            this.projectsCount = Math.floor(projectsCurrent);
                        }
                    }, projectsInterval);
                    
                    // Animate satisfaction count from 0 to 98
                    const satisfactionTarget = 98;
                    const satisfactionDuration = 2000; // 2 seconds
                    const satisfactionSteps = 50;
                    const satisfactionIncrement = satisfactionTarget / satisfactionSteps;
                    const satisfactionInterval = satisfactionDuration / satisfactionSteps;
                    
                    let satisfactionCurrent = 0;
                    const satisfactionTimer = setInterval(() => {
                        satisfactionCurrent += satisfactionIncrement;
                        if (satisfactionCurrent >= satisfactionTarget) {
                            this.satisfactionCount = satisfactionTarget;
                            clearInterval(satisfactionTimer);
                        } else {
                            this.satisfactionCount = Math.floor(satisfactionCurrent);
                        }
                    }, satisfactionInterval);
                }
            }
        }
    </script>

