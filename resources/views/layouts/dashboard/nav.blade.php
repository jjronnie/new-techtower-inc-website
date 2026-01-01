 <nav class="top-nav">
        <!-- Left Section -->
        <div class="flex items-center space-x-4">
            <!-- Menu Toggle (Mobile Only) -->
            <button @click="toggleSidebar()" class="lg:hidden w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                <x-lucide-menu class="w-4 h-4" />
            </button>
            
            <!-- Search (Hidden on mobile) -->
            <div class="hidden md:block relative">
                <input type="text" placeholder="Search..." class="w-64 px-4 py-2 input-glass rounded-xl text-sm">
                <x-lucide-search class="w-4 h-4 absolute right-3 top-1/2 -translate-y-1/2 text-gray-400" />
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <div class="relative" @click.away="notificationOpen = false">
                <button @click="handleNotificationClick()" class="relative w-10 h-10 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition">
                    <x-lucide-bell class="w-4 h-4" />
                    <span class="notification-badge" x-show="notificationCount > 0" x-text="notificationCount"></span>
                </button>
                
                <!-- Notification Dropdown -->
                <div class="notification-dropdown" :class="{ 'active': notificationOpen }">
                    <div class="p-4 border-b border-white/10">
                        <div class="flex items-center justify-between">
                            <h3 class="font-display font-bold">Notifications</h3>
                            <span class="text-xs text-gray-400" x-text="notificationCount + ' new'"></span>
                        </div>
                    </div>
                    
                    <div>
                        <div class="notification-item unread">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 rounded-full bg-[--primary]/20 flex items-center justify-center flex-shrink-0">
                                    <x-lucide-shopping-cart class="w-4 h-4 text-[--primary]" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-white mb-1">New order received</p>
                                    <p class="text-xs text-gray-400">Order #DCB9410539 - $205.18</p>
                                    <p class="text-xs text-gray-500 mt-1">2 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="notification-item unread">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                                    <x-lucide-message-square class="w-4 h-4 text-blue-400" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-white mb-1">New message from client</p>
                                    <p class="text-xs text-gray-400">John Doe sent you a message</p>
                                    <p class="text-xs text-gray-500 mt-1">15 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center flex-shrink-0">
                                    <x-lucide-check-circle class="w-4 h-4 text-green-400" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-white mb-1">Project completed</p>
                                    <p class="text-xs text-gray-400">E-Commerce Platform is live</p>
                                    <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                                    <x-lucide-users class="w-4 h-4 text-purple-400" />
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-white mb-1">New team member</p>
                                    <p class="text-xs text-gray-400">Sarah joined as Designer</p>
                                    <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-3 border-t border-white/10">
                        <a href="/dashboard/notifications" class="text-sm text-[--primary] hover:underline block text-center">
                            View all notifications
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- User Menu -->
            <div class="relative" @click.away="userMenuOpen = false">
                <button @click="handleUserMenuClick()" class="flex items-center space-x-3 glass px-3 py-2 rounded-xl hover:bg-white/10 transition">
                    <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=ff641e&color=fff" alt="User" class="w-8 h-8 rounded-full">
                    <div class="hidden sm:block text-left">
                        <div class="text-sm font-display font-bold"> {{auth()->user()->name}} </div>
                    </div>
                    <x-lucide-chevron-down class="w-4 h-4 text-gray-400" />
                </button>
                
                <!-- User Dropdown -->
                <div class="user-dropdown" :class="{ 'active': userMenuOpen }">
                    <div class="p-4 border-b border-white/10">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=ff641e&color=fff" alt="User" class="w-12 h-12 rounded-full">
                            <div>
                                <div class="font-display font-bold">{{auth()->user()->name}}</div>
                                <div class="text-xs text-gray-400">{{auth()->user()->email}}</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2">
                        <a href="{{ route('profile.edit') }}" class="user-dropdown-item rounded-lg">
                            <x-lucide-user class="w-4 h-4" />
                            <span>My Profile</span>
                        </a>
                        <a href="/dashboard/settings" class="user-dropdown-item rounded-lg">
                            <x-lucide-settings class="w-4 h-4" />
                            <span>Settings</span>
                        </a>
                        <a href="/dashboard/billing" class="user-dropdown-item rounded-lg">
                            <x-lucide-credit-card class="w-4 h-4" />
                            <span>Billing</span>
                        </a>
                        
                        <div class="user-dropdown-divider"></div>
                        
                        <a href="/logout" class="user-dropdown-item rounded-lg text-red-400">
                            <x-lucide-log-out class="w-4 h-4" />
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>