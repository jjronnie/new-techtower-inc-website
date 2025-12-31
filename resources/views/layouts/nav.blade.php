   <!-- Navigation -->
   <nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-white/10">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
           <div class="flex items-center justify-between h-20">
               <!-- Logo -->
               <a href="/" class="flex items-center space-x-2">

                   <x-logo />
               </a>

               <!-- Desktop Navigation -->
               <div class="hidden lg:flex items-center space-x-8">
                   <a href="{{ route('home') }}" class="nav-link active font-medium">HOME</a>
                   <a href="#services" class="nav-link font-medium">SERVICES</a>
                   <a href="#portfolio" class="nav-link font-medium">PORTFOLIO</a>
                   <a href="#shop" class="nav-link font-medium">SHOP</a>
                   <a href="{{ route('about') }}" class="nav-link font-medium">ABOUT</a>
                   <a href="#contact" class="nav-link font-medium">CONTACT</a>
               </div>

               <!-- Desktop Actions -->
               <div class="hidden lg:flex items-center space-x-5">
                   <button @click="toggleSearch" class="text-white glass-hover rounded-full p-3 transition">
                       <x-lucide-search class="w-5 h-5" />

                   </button>
                   <a href="/wishlist.html" class="relative text-white glass-hover rounded-full p-3  transition">
                       <x-lucide-heart class="w-5 h-5" />
                       <span x-show="wishlistCount > 0"
                           class="absolute -top-2 -right-2 bg-[--primary] text-black text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center"
                           x-text="wishlistCount"></span>
                   </a>
                   <a href="/cart.html" class="relative text-white glass-hover rounded-full p-3  transition">

                       <x-lucide-shopping-cart class="w-5 h-5" />

                       <span x-show="cartCount > 0"
                           class="absolute -top-2 -right-2 bg-[--primary] text-black text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center"
                           x-text="cartCount"></span>
                   </a>
                   <a href="/login.html" class="text-white glass-hover rounded-full p-3 transition">
                       <x-lucide-user-round class="w-5 h-5" />

                   </a>
               </div>

               <!-- Mobile Actions -->
               <div class="flex lg:hidden items-center space-x-3">
                   <button @click="toggleSearch" class="text-white glass-hover rounded-full p-3  transition">
                       <x-lucide-search class="w-4 h-4" />

                   </button>
                   <a href="/cart.html" class="relative text-white glass-hover rounded-full p-3  transition">
                       <x-lucide-shopping-cart class="w-4 h-4" />
                       <span x-show="cartCount > 0"
                           class="absolute -top-2 -right-2 bg-[--primary] text-black text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center"
                           x-text="cartCount"></span>
                   </a>


                   <button @click="mobileMenuOpen = !mobileMenuOpen"
                       class="transition-colors duration-200   text-white glass-hover rounded-full p-3         bg-transparent hover:bg-[--primary]            hover:text-black">
                       <x-lucide-x x-cloak x-show="mobileMenuOpen" class="w-4 h-4" />

                       <x-lucide-menu x-cloak x-show="!mobileMenuOpen" class="w-4 h-4" />
                   </button>

               </div>
           </div>
       </div>

       <!-- Search Bar -->
       <div x-show="searchOpen" x-transition class="border-t border-white/10 bg-black/50 backdrop-blur-xl">
           <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
               <div class="relative">
                   <input type="text" placeholder="Search..."
                       class="w-full px-6 py-4 input-glass rounded-xl text-lg">
                   <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white">
                       <x-lucide-search class="w-4 h-4" />
                   </button>
               </div>
           </div>
       </div>
   </nav>

   <!-- Mobile Menu -->
   <div x-show="mobileMenuOpen" x-transition:enter="mobile-menu-open" class="fixed inset-0 z-40 lg:hidden "
       style="display: none;">
       <div class="fixed inset-0 bg-black/90 backdrop-blur-xl" @click="mobileMenuOpen = false"></div>
       <div class="fixed inset-y-0 left-0 right-0 glass p-6 overflow-y-auto no-scrollbar">
           <div class="flex items-center justify-between mb-8">
               <span class="text-2xl font-display font-bold">
                   <span class="text-gradient">TECH</span><span class="text-white">TOWER</span>
               </span>
               <button @click="mobileMenuOpen = false" class="text-white">
                   <x-lucide-x class="w-4 h-4" />
               </button>
           </div>

           <nav class="space-y-2 mb-8">
               <a href="#home" @click="mobileMenuOpen = false"
                   class="block py-3 text-lg font-display text-gray-300 hover:text-white transition relative mobile-nav-active">HOME</a>
               <a href="#services" @click="mobileMenuOpen = false"
                   class="block py-3 text-lg font-display text-gray-300 hover:text-white transition relative">SERVICES</a>
               <a href="#portfolio" @click="mobileMenuOpen = false"
                   class="block py-3 text-lg font-display text-gray-300 hover:text-white transition relative">PORTFOLIO</a>
               <a href="#shop" @click="mobileMenuOpen = false"
                   class="block py-3 text-lg font-display text-gray-300 hover:text-white transition relative">SHOP</a>
               <a href="#contact" @click="mobileMenuOpen = false"
                   class="block py-3 text-lg font-display text-gray-300 hover:text-white transition relative">CONTACT</a>
           </nav>

           <div class="grid grid-cols-2 gap-4 mb-8">
               <a href="/wishlist.html" class="glass-hover p-4 rounded-xl text-center">
                   <x-lucide-heart class="text-[--primary] w-4 h-4 mb-2" />

                   <div class="text-sm font-display">Wishlist</div>
               </a>
               <a href="/login.html" class="glass-hover p-4 rounded-xl text-center">
                   <x-lucide-user-round class="text-[--primary] w-4 h-4 mb-2" />
                   <div class="text-sm font-display">Account</div>
               </a>
           </div>

           <div class="space-y-4">
               <div class="text-sm font-display text-gray-400 mb-3">SERVICES</div>
               <div class="grid grid-cols-2 gap-3">
                   <a href="#" class="glass-hover p-3 rounded-lg flex items-center space-x-2">
                       <x-lucide-laptop-minimal-check class="text-[--primary] w-4 h-4" />
                       <span class="text-sm">Web Dev</span>
                   </a>
                   <a href="#" class="glass-hover p-3 rounded-lg flex items-center space-x-2">
                       <x-lucide-smartphone class="text-[--primary] w-4 h-4" />
                       <span class="text-sm">Mobile Apps</span>
                   </a>
                   <a href="#" class="glass-hover p-3 rounded-lg flex items-center space-x-2">
                       <x-lucide-code class="text-[--primary] w-4 h-4" />
                       <span class="text-sm">Software</span>
                   </a>
                   <a href="#" class="glass-hover p-3 rounded-lg flex items-center space-x-2">
                       <x-lucide-cloud class="text-[--primary] w-4 h-4" />
                       <span class="text-sm">Cloud</span>
                   </a>
               </div>
           </div>
       </div>
   </div>
