<x-guest-layout>
  <!-- ============================================ -->
<!-- ABOUT PAGE TITLE SECTION -->
<!-- ============================================ -->
<section class="relative pt-32 pb-16 px-4 hero-bg hero-grid-bg">
    <div class="max-w-7xl mx-auto text-center">
        <nav class="flex items-center justify-center space-x-2 text-sm mb-6">
            <a href="/" class="text-gray-400 hover:text-white transition">Home</a>
            <i class="fas fa-chevron-right text-gray-600 text-xs"></i>
            <span class="text-[--primary]">About Us</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold mb-6">
            About <span class="text-gradient">TechTower</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            Pioneering digital transformation across Africa with innovative software solutions
        </p>
    </div>
</section>

<!-- ============================================ -->
<!-- ABOUT HERO SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate-slide-up">
                <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-6">EST. 2020 • KAMPALA, UGANDA</span>
                <h2 class="text-4xl sm:text-5xl font-display font-bold mb-6 leading-tight">
                    Pioneering <span class="text-gradient">Digital Solutions</span> in Africa
                </h2>
                <p class="text-lg text-gray-400 leading-relaxed mb-6">
                    TechTower Innovations is a Kampala-based software development company dedicated to crafting exceptional digital experiences that drive progress and empower businesses across the continent and beyond.
                </p>
                <p class="text-lg text-gray-400 leading-relaxed mb-8">
                    We believe in the power of collaboration, working closely with our clients to understand their unique needs and co-create solutions that deliver tangible results. Our Ugandan roots provide us with a unique perspective, allowing us to build technology that is both globally competitive and locally relevant.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="btn-primary px-8 py-4 rounded-xl text-center flex items-center justify-center space-x-2">
                        <span>PARTNER WITH US</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#values" class="btn-glass px-8 py-4 rounded-xl text-center">OUR VALUES</a>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative">
                <div class="glass rounded-3xl overflow-hidden shadow-2xl glow-primary">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" alt="Team collaboration" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-[--primary]/20 flex items-center justify-center backdrop-blur-sm">
                                <i class="fas fa-users text-[--primary] text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-display font-bold">50+</div>
                                <div class="text-sm text-gray-300">Team Members</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Stats -->
                <div class="absolute -right-4 -top-4 glass px-6 py-4 rounded-2xl animate-float">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-award text-[--primary] text-3xl"></i>
                        <div>
                            <div class="text-xs text-gray-400">Since</div>
                            <div class="font-display font-bold text-xl">2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- OUR STORY SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4 bg-gradient-to-b from-transparent to-black/30">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-16">
            <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">OUR JOURNEY</span>
            <h2 class="text-4xl sm:text-5xl font-display font-bold mb-6">
                From Vision to <span class="text-gradient">Reality</span>
            </h2>
        </div>
        
        <div class="glass rounded-3xl p-8 sm:p-12 mb-12">
            <p class="text-lg text-gray-300 leading-relaxed mb-6">
                Founded with a passion for technology and a commitment to innovation, TechTower Innovations began as a collective of bright minds aiming to solve complex challenges with elegant software solutions.
            </p>
            <p class="text-lg text-gray-300 leading-relaxed">
                Our journey is fueled by a desire to not just meet client expectations, but to exceed them, fostering growth and digital transformation. We've grown from a small startup to a trusted partner for businesses across Africa, delivering solutions that make a real difference.
            </p>
        </div>
        
        <!-- Timeline -->
        <div class="space-y-8">
            <div class="flex items-start space-x-6" x-data="{ inView: false }" x-intersect="inView = true">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-[--primary]/20 flex items-center justify-center">
                    <span class="text-2xl font-display font-bold text-[--primary]">1</span>
                </div>
                <div class="flex-1 glass rounded-2xl p-6" :class="inView ? 'animate-slide-up' : 'opacity-0'">
                    <h3 class="text-xl font-display font-bold mb-2">The Beginning</h3>
                    <p class="text-gray-400">Started in 2020 with a vision to bring world-class software development to East Africa</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-6" x-data="{ inView: false }" x-intersect="inView = true">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-[--primary]/20 flex items-center justify-center">
                    <span class="text-2xl font-display font-bold text-[--primary]">2</span>
                </div>
                <div class="flex-1 glass rounded-2xl p-6" :class="inView ? 'animate-slide-up' : 'opacity-0'">
                    <h3 class="text-xl font-display font-bold mb-2">Growth & Expansion</h3>
                    <p class="text-gray-400">Expanded our team and services, delivering 500+ successful projects across multiple industries</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-6" x-data="{ inView: false }" x-intersect="inView = true">
                <div class="flex-shrink-0 w-16 h-16 rounded-2xl bg-[--primary]/20 flex items-center justify-center">
                    <span class="text-2xl font-display font-bold text-[--primary]">3</span>
                </div>
                <div class="flex-1 glass rounded-2xl p-6" :class="inView ? 'animate-slide-up' : 'opacity-0'">
                    <h3 class="text-xl font-display font-bold mb-2">Leading Innovation</h3>
                    <p class="text-gray-400">Recognized as a leading tech partner, driving digital transformation across Africa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- MISSION, VISION, APPROACH SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="glass-hover rounded-3xl p-8 text-center card-product">
                <div class="w-16 h-16 rounded-2xl bg-[--primary]/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rocket text-[--primary] text-3xl"></i>
                </div>
                <h3 class="text-2xl font-display font-bold mb-4">Our Mission</h3>
                <p class="text-gray-400 leading-relaxed">
                    To empower businesses with transformative technology, fostering innovation and sustainable growth across Africa and beyond.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="glass-hover rounded-3xl p-8 text-center card-product">
                <div class="w-16 h-16 rounded-2xl bg-blue-500/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-eye text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-display font-bold mb-4">Our Vision</h3>
                <p class="text-gray-400 leading-relaxed">
                    To be the leading digital innovation partner, recognized for excellence, impact, and shaping the future of technology.
                </p>
            </div>
            
            <!-- Approach -->
            <div class="glass-hover rounded-3xl p-8 text-center card-product">
                <div class="w-16 h-16 rounded-2xl bg-green-500/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-cogs text-green-400 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-display font-bold mb-4">Our Approach</h3>
                <p class="text-gray-400 leading-relaxed">
                    We combine agile methodologies, user-centric design, and deep technical expertise to deliver solutions that are not just built right, but are the right build.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- OUR GUIDING PRINCIPLES/VALUES SECTION -->
<!-- ============================================ -->
<section id="values" class="py-20 px-4 bg-gradient-to-b from-transparent to-black/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="glass px-4 py-2 rounded-full text-sm font-display tracking-wider inline-block mb-4">WHAT DRIVES US</span>
            <h2 class="text-4xl sm:text-5xl font-display font-bold mb-6">
                Our Guiding <span class="text-gradient">Principles</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                These values are the bedrock of our company culture and the driving force behind our success.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Innovation First -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'">
                <div class="w-14 h-14 rounded-2xl bg-[--primary]/20 flex items-center justify-center mb-6">
                    <i class="fas fa-lightbulb text-[--primary] text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Innovation First</h3>
                <p class="text-gray-400 leading-relaxed">
                    We constantly explore new technologies and creative approaches to deliver cutting-edge solutions that push boundaries and set new standards.
                </p>
            </div>
            
            <!-- Client Success -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'" style="animation-delay: 0.1s;">
                <div class="w-14 h-14 rounded-2xl bg-blue-500/20 flex items-center justify-center mb-6">
                    <i class="fas fa-handshake text-blue-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Client Success</h3>
                <p class="text-gray-400 leading-relaxed">
                    Your goals are our goals. We are dedicated to building partnerships that drive tangible business value and long-term success.
                </p>
            </div>
            
            <!-- Unwavering Integrity -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'" style="animation-delay: 0.2s;">
                <div class="w-14 h-14 rounded-2xl bg-green-500/20 flex items-center justify-center mb-6">
                    <i class="fas fa-shield-alt text-green-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Unwavering Integrity</h3>
                <p class="text-gray-400 leading-relaxed">
                    We operate with transparency, honesty, and the highest ethical standards in all our interactions and business practices.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'" style="animation-delay: 0.3s;">
                <div class="w-14 h-14 rounded-2xl bg-purple-500/20 flex items-center justify-center mb-6">
                    <i class="fas fa-award text-purple-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Pursuit of Excellence</h3>
                <p class="text-gray-400 leading-relaxed">
                    We strive for excellence in every line of code, every design element, and every client interaction. Good is never good enough.
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'" style="animation-delay: 0.4s;">
                <div class="w-14 h-14 rounded-2xl bg-yellow-500/20 flex items-center justify-center mb-6">
                    <i class="fas fa-users text-yellow-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Team Collaboration</h3>
                <p class="text-gray-400 leading-relaxed">
                    We believe the best solutions come from diverse perspectives working together towards a common goal with mutual respect.
                </p>
            </div>
            
            <!-- Continuous Learning -->
            <div class="glass-hover rounded-3xl p-8 card-product" x-data="{ inView: false }" x-intersect="inView = true" :class="inView ? 'animate-slide-up' : 'opacity-0'" style="animation-delay: 0.5s;">
                <div class="w-14 h-14 rounded-2xl bg-pink-500/20 flex items-center justify-center mb-6">
                    <i class="fas fa-graduation-cap text-pink-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-display font-bold mb-4">Continuous Learning</h3>
                <p class="text-gray-400 leading-relaxed">
                    Technology evolves rapidly, and so do we. We invest in our team's growth and stay ahead of industry trends and best practices.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- STATS SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="glass rounded-3xl p-12">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div x-data="counter(500)" x-init="init()">
                    <div class="text-5xl font-display font-bold text-gradient mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-400">Projects Delivered</div>
                </div>
                <div x-data="counter(98)" x-init="init()">
                    <div class="text-5xl font-display font-bold text-gradient mb-2" x-text="count + '%'"></div>
                    <div class="text-gray-400">Client Satisfaction</div>
                </div>
                <div x-data="counter(50)" x-init="init()">
                    <div class="text-5xl font-display font-bold text-gradient mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-400">Team Members</div>
                </div>
                <div x-data="counter(15)" x-init="init()">
                    <div class="text-5xl font-display font-bold text-gradient mb-2" x-text="count + '+'"></div>
                    <div class="text-gray-400">Countries Served</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- PARTNER WITH US CTA SECTION -->
<!-- ============================================ -->
<section id="contact" class="py-20 px-4 bg-gradient-to-b from-transparent to-black/30">
    <div class="max-w-4xl mx-auto">
        <div class="glass rounded-3xl p-12 text-center relative overflow-hidden">
            <!-- Decorative gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-[--primary]/10 to-transparent pointer-events-none"></div>
            
            <div class="relative z-10">
                <div class="w-20 h-20 rounded-3xl bg-[--primary]/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-rocket text-[--primary] text-4xl"></i>
                </div>
                <h2 class="text-4xl sm:text-5xl font-display font-bold mb-6">
                    Ready to <span class="text-gradient">Transform</span> Your Business?
                </h2>
                <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto">
                    Let's collaborate to bring your vision to life. Partner with TechTower and experience innovation that drives real results.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact.html" class="btn-primary px-8 py-4 rounded-xl inline-flex items-center justify-center space-x-2">
                        <span>START A PROJECT</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="/services.html" class="btn-glass px-8 py-4 rounded-xl">VIEW OUR SERVICES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Counter animation function
    function counter(target) {
        return {
            count: 0,
            target: target,
            
            init() {
                this.animateCounter();
            },
            
            animateCounter() {
                const duration = 2000;
                const startTime = Date.now();
                
                const animate = () => {
                    const currentTime = Date.now();
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    
                    // Easing function
                    const easeOutQuad = progress * (2 - progress);
                    
                    this.count = Math.floor(easeOutQuad * this.target);
                    
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    }
                };
                
                requestAnimationFrame(animate);
            }
        }
    }
</script>



<!-- ============================================ -->
<!-- SERVICE DETAILS SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <div class="glass rounded-3xl overflow-hidden mb-8">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Web Development" class="w-full h-96 object-cover">
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <div>
                    <div class="flex items-center text-sm mb-4">
                        <div class="flex items-center text-yellow-400">
                            <i class="fas fa-star text-sm"></i>
                            <i class="fas fa-star text-sm"></i>
                            <i class="fas fa-star text-sm"></i>
                            <i class="fas fa-star text-sm"></i>
                            <i class="fas fa-star-half-alt text-sm"></i>
                        </div>
                        <span class="text-gray-400 ml-2">(150 reviews)</span>
                    </div>
                    <h1 class="text-4xl font-display font-bold mb-4">Web Development</h1>
                    <p class="text-xl text-gray-400">Create stunning, responsive websites that drive engagement and conversions</p>
                </div>
                
                <div class="glass rounded-3xl p-8">
                    <h2 class="text-2xl font-display font-bold mb-6">Overview</h2>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Our expert team uses the latest technologies to build fast, secure, and scalable web solutions tailored to your business needs. We combine cutting-edge development practices with beautiful design to create websites that not only look great but perform exceptionally.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        From responsive single-page applications to complex enterprise portals, we deliver solutions that help businesses grow in the digital landscape. Our agile development process ensures transparency, quality, and timely delivery of your project.
                    </p>
                </div>
                
                <div class="glass rounded-3xl p-8">
                    <h2 class="text-2xl font-display font-bold mb-6">What's Included</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Responsive Design</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">SEO Optimization</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Performance Optimization</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Security Best Practices</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Cross-browser Compatibility</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Content Management System</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Analytics Integration</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Ongoing Support</span>
                        </div>
                    </div>
                </div>
                
                <div class="glass rounded-3xl p-8">
                    <h2 class="text-2xl font-display font-bold mb-6">Technologies We Use</h2>
                    <div class="flex flex-wrap gap-3">
                        <span class="glass px-4 py-2 rounded-full text-sm">React</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">Vue.js</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">Next.js</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">Node.js</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">PHP</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">Laravel</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">WordPress</span>
                        <span class="glass px-4 py-2 rounded-full text-sm">Tailwind CSS</span>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="glass rounded-3xl p-6 sticky top-24">
                    <h3 class="text-xl font-display font-bold mb-6">Service Details</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-white/10">
                            <span class="text-gray-400">Delivery Time</span>
                            <span class="font-display font-bold">2-4 weeks</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-white/10">
                            <span class="text-gray-400">Projects Done</span>
                            <span class="font-display font-bold">150+</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-white/10">
                            <span class="text-gray-400">Support</span>
                            <span class="font-display font-bold">24/7</span>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <span class="text-gray-400">Warranty</span>
                            <span class="font-display font-bold">6 months</span>
                        </div>
                    </div>
                    <button class="w-full btn-primary py-4 rounded-xl mt-6 flex items-center justify-center space-x-2">
                        <span>REQUEST QUOTE</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- PORTFOLIO DETAILS SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Project Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between flex-wrap gap-4 mb-6">
                <span class="glass px-4 py-2 rounded-full text-sm font-display">WEB DEVELOPMENT</span>
                <div class="flex items-center text-sm">
                    <div class="flex items-center text-yellow-400">
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star-half-alt text-sm"></i>
                    </div>
                    <span class="text-gray-400 ml-2">(89 reviews)</span>
                </div>
            </div>
            <h1 class="text-4xl sm:text-5xl font-display font-bold mb-4">E-Commerce Platform</h1>
            <p class="text-xl text-gray-400">Modern online shopping experience with AI recommendations</p>
        </div>
        
        <!-- Project Image -->
        <div class="glass rounded-3xl overflow-hidden mb-12">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" alt="Project" class="w-full h-[500px] object-cover">
        </div>
        
        <!-- Project Info Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="glass rounded-2xl p-6 text-center">
                <i class="fas fa-user text-[--primary] text-2xl mb-3"></i>
                <div class="text-sm text-gray-400 mb-1">Client</div>
                <div class="font-display font-bold">RetailCo</div>
            </div>
            <div class="glass rounded-2xl p-6 text-center">
                <i class="fas fa-calendar text-[--primary] text-2xl mb-3"></i>
                <div class="text-sm text-gray-400 mb-1">Duration</div>
                <div class="font-display font-bold">3 months</div>
            </div>
            <div class="glass rounded-2xl p-6 text-center">
                <i class="fas fa-code text-[--primary] text-2xl mb-3"></i>
                <div class="text-sm text-gray-400 mb-1">Technology</div>
                <div class="font-display font-bold">React, Node.js</div>
            </div>
            <div class="glass rounded-2xl p-6 text-center">
                <i class="fas fa-rocket text-[--primary] text-2xl mb-3"></i>
                <div class="text-sm text-gray-400 mb-1">Status</div>
                <div class="font-display font-bold text-green-400">Live</div>
            </div>
        </div>
        
        <!-- Project Description -->
        <div class="glass rounded-3xl p-8 mb-12">
            <h2 class="text-3xl font-display font-bold mb-6">Project Overview</h2>
            <p class="text-gray-400 leading-relaxed mb-6">
                Built a comprehensive e-commerce platform with advanced features including AI-powered product recommendations, seamless checkout process, and robust inventory management system. The platform handles thousands of daily transactions with 99.9% uptime.
            </p>
            <p class="text-gray-400 leading-relaxed mb-6">
                The project involved creating a custom backend API, integrating multiple payment gateways, implementing real-time inventory tracking, and building an intuitive admin dashboard for store management.
            </p>
            <h3 class="text-2xl font-display font-bold mb-4 mt-8">Key Features</h3>
            <ul class="grid sm:grid-cols-2 gap-4">
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">AI Product Recommendations</span>
                </li>
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">Multi-currency Support</span>
                </li>
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">Real-time Inventory</span>
                </li>
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">Advanced Analytics</span>
                </li>
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">Mobile Responsive</span>
                </li>
                <li class="flex items-start space-x-3">
                    <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                    <span class="text-gray-300">Payment Gateway Integration</span>
                </li>
            </ul>
        </div>
        
        <!-- Project Gallery -->
        <div class="mb-12">
            <h2 class="text-3xl font-display font-bold mb-6">Project Gallery</h2>
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="glass rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97" alt="Gallery 1" class="w-full h-64 object-cover">
                </div>
                <div class="glass rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Gallery 2" class="w-full h-64 object-cover">
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="glass rounded-3xl p-8 text-center">
            <h3 class="text-2xl font-display font-bold mb-4">Interested in Similar Project?</h3>
            <p class="text-gray-400 mb-6">Let's discuss how we can help transform your business</p>
            <a href="/contact.html" class="btn-primary px-8 py-4 rounded-xl inline-flex items-center space-x-2">
                <span>GET IN TOUCH</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- PRODUCT DETAILS SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div x-data="{ currentImage: 0, images: [
                'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8',
                'https://images.unsplash.com/photo-1558655146-364adaf1fcc9',
                'https://images.unsplash.com/photo-1551650975-87deedd944c3'
            ] }">
                <div class="glass rounded-3xl overflow-hidden mb-6">
                    <img :src="images[currentImage]" alt="Product" class="w-full aspect-square object-cover">
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <template x-for="(image, index) in images" :key="index">
                        <button @click="currentImage = index" class="glass-hover rounded-2xl overflow-hidden" :class="currentImage === index ? 'ring-2 ring-[--primary]' : ''">
                            <img :src="image" alt="Thumbnail" class="w-full aspect-square object-cover">
                        </button>
                    </template>
                </div>
            </div>
            
            <!-- Product Info -->
            <div>
                <div class="flex items-center text-sm mb-4">
                    <div class="flex items-center text-yellow-400">
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="fas fa-star text-sm"></i>
                        <i class="far fa-star text-sm"></i>
                    </div>
                    <span class="text-gray-400 ml-2">(127 reviews)</span>
                    <span class="mx-3 text-gray-600">|</span>
                    <span class="text-green-400 flex items-center">
                        <i class="fas fa-circle text-xs mr-2"></i>
                        In Stock
                    </span>
                </div>
                
                <h1 class="text-4xl font-display font-bold mb-4">Premium UI Kit</h1>
                
                <div class="flex items-center space-x-4 mb-6">
                    <span class="text-4xl font-display font-bold text-[--primary]">$249.99</span>
                    <span class="text-2xl text-gray-500 line-through">$299.99</span>
                    <span class="glass px-3 py-1 rounded-full text-sm font-bold text-green-400">17% OFF</span>
                </div>
                
                <p class="text-gray-400 leading-relaxed mb-8">
                    Professional UI kit with 200+ components, 50+ templates, and comprehensive documentation. Perfect for building modern web applications with stunning interfaces.
                </p>
                
                <div class="glass rounded-3xl p-6 mb-8">
                    <h3 class="font-display font-bold mb-4">Key Features:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">200+ Pre-built Components</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">50+ Page Templates</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Dark & Light Mode</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-[--primary] mt-1"></i>
                            <span class="text-gray-300">Lifetime Updates</span>
                        </li>
                    </ul>
                </div>
                
                <div class="mb-8" x-data="{ quantity: 1 }">
                    <label class="block text-sm font-display mb-3 text-gray-300">QUANTITY</label>
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="glass rounded-xl flex items-center">
                            <button @click="quantity = Math.max(1, quantity - 1)" class="px-4 py-3 hover:text-[--primary] transition">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="px-6 font-display font-bold" x-text="quantity"></span>
                            <button @click="quantity++" class="px-4 py-3 hover:text-[--primary] transition">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button class="flex-1 btn-primary py-4 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span>ADD TO CART</span>
                    </button>
                    <button class="btn-glass px-6 py-4 rounded-xl">
                        <i class="far fa-heart"></i>
                    </button>
                    <button class="btn-glass px-6 py-4 rounded-xl">
                        <i class="fas fa-share-alt"></i>
                    </button>
                </div>
                
                <div class="grid grid-cols-3 gap-4">
                    <div class="glass rounded-xl p-4 text-center">
                        <i class="fas fa-truck text-[--primary] text-xl mb-2"></i>
                        <div class="text-xs text-gray-400">Free Shipping</div>
                    </div>
                    <div class="glass rounded-xl p-4 text-center">
                        <i class="fas fa-shield-alt text-[--primary] text-xl mb-2"></i>
                        <div class="text-xs text-gray-400">Secure Payment</div>
                    </div>
                    <div class="glass rounded-xl p-4 text-center">
                        <i class="fas fa-undo text-[--primary] text-xl mb-2"></i>
                        <div class="text-xs text-gray-400">30-Day Returns</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- WISHLIST SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-display font-bold mb-4 text-center">Your <span class="text-gradient">Wishlist</span></h1>
        <p class="text-gray-400 text-center mb-12">3 items saved</p>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Wishlist Item -->
            <div class="glass-hover rounded-3xl overflow-hidden card-product">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-red-500/20 transition">
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
                        <span class="text-gray-400 ml-2">(156)</span>
                    </div>
                    <h3 class="text-lg font-display font-bold mb-2">Collector's Tool Kit</h3>
                    <div class="text-2xl font-display font-bold text-[--primary] mb-4">$39.99</div>
                    <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span>ADD TO CART</span>
                    </button>
                </div>
            </div>
            
            <!-- More wishlist items... -->
            <div class="glass-hover rounded-3xl overflow-hidden card-product">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1558655146-364adaf1fcc9" alt="Product" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-red-500/20 transition">
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
                    <h3 class="text-lg font-display font-bold mb-2">Premium Display Case</h3>
                    <div class="text-2xl font-display font-bold text-[--primary] mb-4">$59.99</div>
                    <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span>ADD TO CART</span>
                    </button>
                </div>
            </div>
            
            <div class="glass-hover rounded-3xl overflow-hidden card-product">
                <div class="relative aspect-square">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" alt="Product" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-red-500/20 transition">
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
                    <div class="text-2xl font-display font-bold text-[--primary] mb-4">$89.99</div>
                    <button class="w-full btn-primary py-3 rounded-xl flex items-center justify-center space-x-2">
                        <i class="fas fa-shopping-cart"></i>
                        <span>ADD TO CART</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SHOPPING CART SECTION -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-display font-bold mb-12 text-center">Shopping <span class="text-gradient">Cart</span></h1>
        
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Cart Item -->
                <div class="glass rounded-3xl p-6 flex flex-col sm:flex-row gap-6">
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product" class="w-full sm:w-32 h-32 object-cover rounded-xl">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-display font-bold mb-1">Premium Display Case</h3>
                                <p class="text-sm text-gray-400">Accessories</p>
                            </div>
                            <button class="text-gray-400 hover:text-red-500 transition">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="glass rounded-xl flex items-center" x-data="{ qty: 1 }">
                                <button @click="qty = Math.max(1, qty - 1)" class="px-4 py-2 hover:text-[--primary] transition">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="px-4 font-display font-bold" x-text="qty"></span>
                                <button @click="qty++" class="px-4 py-2 hover:text-[--primary] transition">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="text-2xl font-display font-bold text-[--primary]">$59.99</div>
                        </div>
                    </div>
                </div>
                
                <!-- More cart items... -->
                <div class="glass rounded-3xl p-6 flex flex-col sm:flex-row gap-6">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Product" class="w-full sm:w-32 h-32 object-cover rounded-xl">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-display font-bold mb-1">Tesla Cybertruck 1:24</h3>
                                <p class="text-sm text-gray-400">Trucks</p>
                            </div>
                            <button class="text-gray-400 hover:text-red-500 transition">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="glass rounded-xl flex items-center" x-data="{ qty: 1 }">
                                <button @click="qty = Math.max(1, qty - 1)" class="px-4 py-2 hover:text-[--primary] transition">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="px-4 font-display font-bold" x-text="qty"></span>
                                <button @click="qty++" class="px-4 py-2 hover:text-[--primary] transition">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="text-2xl font-display font-bold text-[--primary]">$129.99</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-between items-center">
                    <button class="text-red-500 hover:text-red-400 transition font-display">CLEAR CART</button>
                    <a href="/shop.html" class="btn-glass px-6 py-3 rounded-xl">CONTINUE SHOPPING</a>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="glass rounded-3xl p-8 h-fit sticky top-24">
                <h2 class="text-2xl font-display font-bold mb-6">Order Summary</h2>
                <div class="space-y-4 mb-6">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal</span>
                        <span class="text-white font-display">$189.98</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Shipping</span>
                        <span class="text-green-400 font-display">FREE</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Tax</span>
                        <span class="text-white font-display">$15.20</span>
                    </div>
                    <div class="border-t border-white/10 pt-4">
                        <div class="flex justify-between text-xl font-display font-bold">
                            <span>Total</span>
                            <span class="text-[--primary]">$205.18</span>
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <input type="text" placeholder="Promo code" class="w-full px-4 py-3 input-glass rounded-xl mb-3">
                    <button class="w-full btn-glass py-3 rounded-xl">APPLY</button>
                </div>
                
                <a href="/checkout.html" class="btn-primary w-full py-4 rounded-xl flex items-center justify-center space-x-2">
                    <span>PROCEED TO CHECKOUT</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                
                <div class="flex items-center justify-center space-x-3 mt-6">
                    <i class="fab fa-cc-visa text-3xl text-gray-400"></i>
                    <i class="fab fa-cc-mastercard text-3xl text-gray-400"></i>
                    <i class="fab fa-cc-paypal text-3xl text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- CHECKOUT SECTION (Multi-step) -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-display font-bold mb-12 text-center"><span class="text-gradient">Checkout</span></h1>
        
        <!-- Progress Steps -->
        <div class="max-w-3xl mx-auto mb-12" x-data="{ step: 1 }">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center flex-1">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-display font-bold transition" :class="step >= 1 ? 'bg-[--primary] text-black' : 'glass text-gray-400'">1</div>
                    <div class="flex-1 h-1 mx-2 transition" :class="step >= 2 ? 'bg-[--primary]' : 'bg-white/10'"></div>
                </div>
                <div class="flex items-center flex-1">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-display font-bold transition" :class="step >= 2 ? 'bg-[--primary] text-black' : 'glass text-gray-400'">2</div>
                    <div class="flex-1 h-1 mx-2 transition" :class="step >= 3 ? 'bg-[--primary]' : 'bg-white/10'"></div>
                </div>
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-display font-bold transition" :class="step >= 3 ? 'bg-[--primary] text-black' : 'glass text-gray-400'">3</div>
            </div>
            
            <div class="flex items-center justify-between text-sm">
                <span :class="step >= 1 ? 'text-[--primary]' : 'text-gray-400'" class="font-display">
                    <i class="fas fa-truck mr-2"></i>Shipping
                </span>
                <span :class="step >= 2 ? 'text-[--primary]' : 'text-gray-400'" class="font-display">
                    <i class="fas fa-credit-card mr-2"></i>Payment
                </span>
                <span :class="step >= 3 ? 'text-[--primary]' : 'text-gray-400'" class="font-display">
                    <i class="fas fa-check-circle mr-2"></i>Review
                </span>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Checkout Form -->
            <div class="lg:col-span-2">
                <!-- Step 1: Shipping -->
                <div class="glass rounded-3xl p-8 mb-8" x-data="{ step: 1 }" x-show="step === 1">
                    <h2 class="text-2xl font-display font-bold mb-6">Shipping Information</h2>
                    <form class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">First Name *</label>
                                <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">Last Name *</label>
                                <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">Email *</label>
                                <input type="email" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">Phone</label>
                                <input type="tel" class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-display mb-2 text-gray-300">Address *</label>
                            <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">City *</label>
                                <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">State/Province</label>
                                <input type="text" class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">ZIP/Postal Code *</label>
                                <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">Country</label>
                                <select class="w-full px-4 py-3 input-glass rounded-xl">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" @click="step = 2" class="btn-primary px-8 py-4 rounded-xl">
                            CONTINUE TO PAYMENT
                        </button>
                    </form>
                </div>
                
                <!-- Step 2: Payment -->
                <div class="glass rounded-3xl p-8 mb-8" x-data="{ step: 1 }" x-show="step === 2" style="display: none;">
                    <h2 class="text-2xl font-display font-bold mb-6">Payment Information</h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-display mb-2 text-gray-300">Name on Card *</label>
                            <input type="text" required class="w-full px-4 py-3 input-glass rounded-xl">
                        </div>
                        <div>
                            <label class="block text-sm font-display mb-2 text-gray-300">Card Number *</label>
                            <input type="text" placeholder="1234 5678 9012 3456" required class="w-full px-4 py-3 input-glass rounded-xl">
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">Expiry Date *</label>
                                <input type="text" placeholder="MM/YY" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                            <div>
                                <label class="block text-sm font-display mb-2 text-gray-300">CVV *</label>
                                <input type="text" placeholder="123" required class="w-full px-4 py-3 input-glass rounded-xl">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <button type="button" @click="step = 1" class="btn-glass px-8 py-4 rounded-xl">BACK</button>
                            <button type="button" @click="step = 3" class="btn-primary flex-1 py-4 rounded-xl">REVIEW ORDER</button>
                        </div>
                    </form>
                </div>
                
                <!-- Step 3: Review -->
                <div class="glass rounded-3xl p-8" x-data="{ step: 1 }" x-show="step === 3" style="display: none;">
                    <h2 class="text-2xl font-display font-bold mb-6">Review Your Order</h2>
                    
                    <div class="space-y-6">
                        <div class="glass rounded-2xl p-6">
                            <h3 class="font-display font-bold mb-4">Shipping Address</h3>
                            <p class="text-gray-400">
                                Clementine Hodge<br>
                                Voluptate nostrud ut<br>
                                Id reprehenderit lab, Velit aut aut laboru 51674<br>
                                Reprehenderit aliqui
                            </p>
                            <button class="text-[--primary] hover:underline text-sm mt-2">Edit</button>
                        </div>
                        
                        <div class="glass rounded-2xl p-6">
                            <h3 class="font-display font-bold mb-4">Payment Method</h3>
                            <p class="text-gray-400">Card ending in ****821</p>
                            <button class="text-[--primary] hover:underline text-sm mt-2">Edit</button>
                        </div>
                        
                        <div class="glass rounded-2xl p-6">
                            <h3 class="font-display font-bold mb-4">Order Items</h3>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product" class="w-16 h-16 object-cover rounded-lg">
                                        <div>
                                            <div class="font-display font-bold">Premium Display Case</div>
                                            <div class="text-sm text-gray-400">Qty: 1</div>
                                        </div>
                                    </div>
                                    <div class="font-display font-bold text-[--primary]">$59.99</div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Product" class="w-16 h-16 object-cover rounded-lg">
                                        <div>
                                            <div class="font-display font-bold">Tesla Cybertruck 1:24</div>
                                            <div class="text-sm text-gray-400">Qty: 1</div>
                                        </div>
                                    </div>
                                    <div class="font-display font-bold text-[--primary]">$129.99</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <button type="button" @click="step = 2" class="btn-glass px-8 py-4 rounded-xl">BACK</button>
                            <a href="/order-confirmation.html" class="btn-primary flex-1 py-4 rounded-xl text-center">PLACE ORDER</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary Sidebar -->
            <div class="glass rounded-3xl p-8 h-fit sticky top-24">
                <h2 class="text-2xl font-display font-bold mb-6">Order Summary</h2>
                
                <div class="space-y-4 mb-6">
                    <div class="flex items-center space-x-4 pb-4 border-b border-white/10">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product" class="w-16 h-16 object-cover rounded-lg">
                        <div class="flex-1">
                            <div class="font-display font-bold text-sm">Premium Display Case</div>
                            <div class="text-xs text-gray-400">x1</div>
                        </div>
                        <div class="font-display font-bold text-[--primary]">$59.99</div>
                    </div>
                    <div class="flex items-center space-x-4 pb-4 border-b border-white/10">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Product" class="w-16 h-16 object-cover rounded-lg">
                        <div class="flex-1">
                            <div class="font-display font-bold text-sm">Tesla Cybertruck 1:24</div>
                            <div class="text-xs text-gray-400">x1</div>
                        </div>
                        <div class="font-display font-bold text-[--primary]">$129.99</div>
                    </div>
                </div>
                
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal</span>
                        <span class="text-white font-display">$189.98</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Shipping</span>
                        <span class="text-green-400 font-display">FREE</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Tax</span>
                        <span class="text-white font-display">$15.20</span>
                    </div>
                    <div class="border-t border-white/10 pt-4">
                        <div class="flex justify-between text-xl font-display font-bold">
                            <span>Total</span>
                            <span class="text-[--primary]">$205.18</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- ORDER CONFIRMATION SECTION -->
<!-- ============================================ -->
<section class="min-h-screen flex items-center justify-center py-20 px-4">
    <div class="max-w-2xl w-full text-center">
        <div class="w-24 h-24 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-check-circle text-green-400 text-5xl"></i>
        </div>
        
        <h1 class="text-4xl sm:text-5xl font-display font-bold mb-4">
            Order <span class="text-gradient">Confirmed!</span>
        </h1>
        <p class="text-gray-400 mb-12">Thank you for your purchase! Your order has been successfully placed.</p>
        
        <div class="glass rounded-3xl p-8 mb-8 text-left">
            <div class="grid sm:grid-cols-2 gap-6 mb-6">
                <div>
                    <div class="text-sm text-gray-400 mb-1">Order Number</div>
                    <div class="text-xl font-display font-bold text-[--primary]">DCB9410539</div>
                </div>
                <div>
                    <div class="text-sm text-gray-400 mb-1">Estimated Delivery</div>
                    <div class="text-xl font-display font-bold">3-5 Business Days</div>
                </div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center space-x-3 mb-4">
                    <i class="fas fa-envelope text-[--primary] text-xl"></i>
                    <div>
                        <div class="font-display font-bold">Confirmation Email Sent</div>
                        <div class="text-sm text-gray-400">Check your inbox for order details and tracking info</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="glass rounded-3xl p-8 mb-8 text-left">
            <h2 class="text-2xl font-display font-bold mb-6">What's Next?</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-full bg-[--primary]/20 flex items-center justify-center flex-shrink-0">
                        <span class="font-display font-bold text-[--primary]">1</span>
                    </div>
                    <div>
                        <div class="font-display font-bold mb-1">Order Processing</div>
                        <div class="text-sm text-gray-400">We're preparing your order</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-full glass flex items-center justify-center flex-shrink-0">
                        <span class="font-display font-bold">2</span>
                    </div>
                    <div>
                        <div class="font-display font-bold mb-1">Shipped</div>
                        <div class="text-sm text-gray-400">You'll receive tracking info</div>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-full glass flex items-center justify-center flex-shrink-0">
                        <span class="font-display font-bold">3</span>
                    </div>
                    <div>
                        <div class="font-display font-bold mb-1">Delivered</div>
                        <div class="text-sm text-gray-400">Enjoy your new collectible!</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/shop.html" class="btn-glass px-8 py-4 rounded-xl">CONTINUE SHOPPING</a>
            <a href="/orders.html" class="btn-primary px-8 py-4 rounded-xl">VIEW ORDER</a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- EMPTY CART SECTION -->
<!-- ============================================ -->
<section class="min-h-screen flex items-center justify-center py-20 px-4">
    <div class="max-w-md w-full text-center">
        <div class="w-24 h-24 rounded-full glass flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-shopping-bag text-gray-400 text-4xl"></i>
        </div>
        
        <h1 class="text-4xl font-display font-bold mb-4">Your Cart is <span class="text-gradient">Empty</span></h1>
        <p class="text-gray-400 mb-8">Looks like you haven't added any die-cast models to your collection yet.</p>
        
        <a href="/shop.html" class="btn-primary px-8 py-4 rounded-xl inline-flex items-center space-x-2">
            <span>START SHOPPING</span>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<!-- ============================================ -->
<!-- SHOP/PRODUCTS PAGE -->
<!-- ============================================ -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl font-display font-bold mb-4">
                Shop <span class="text-gradient">Collection</span>
            </h1>
            <p class="text-gray-400">Explore our curated selection of premium die-cast models.</p>
        </div>
        
        <!-- Filters & Search -->
        <div class="flex flex-col lg:flex-row gap-6 mb-12">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Search models..." class="w-full px-6 py-4 input-glass rounded-xl pr-12">
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
                    <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8" alt="Product" class="w-full h-full object-cover">
                    <span class="badge badge-new">NEW</span>
                    <span class="badge badge-sale" style="top: 3.5rem;">SALE</span>
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
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
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3" alt="Product" class="w-full h-full object-cover">
                    <span class="badge badge-new">NEW</span>
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
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
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" alt="Product" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
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
                    <img src="https://images.unsplash.com/photo-1558655146-364adaf1fcc9" alt="Product" class="w-full h-full object-cover">
                    <span class="badge badge-auction">AUCTION</span>
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
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
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" alt="Product" class="w-full h-full object-cover">
                    <button class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/20 transition">
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
            <button class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 rounded-xl bg-[--primary] text-black font-display font-bold">1</button>
            <button class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">2</button>
            <button class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">3</button>
            <button class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">4</button>
            <button class="w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
</x-guest-layout>
