<x-app-layout>
<style>
    /* Dashboard Specific Styles */
    .dashboard-wrapper {
        display: flex;
        min-height: 100vh;
        background: var(--bg-dark);
    }
    
    /* Sidebar Styles */
    .sidebar {
        width: 280px;
        background: rgba(15, 15, 15, 0.6);
        backdrop-filter: blur(20px);
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        z-index: 40;
        transition: transform 0.3s ease;
        overflow-y: auto;
    }
    
    @media (max-width: 1024px) {
        .sidebar {
            transform: translateX(-280px);
        }
        
        .sidebar.open {
            transform: translateX(0);
        }
    }
    
    .sidebar-logo {
        padding: 1.5rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .sidebar-nav {
        padding: 1rem;
    }
    
    .sidebar-item {
        display: flex;
        align-items: center;
        padding: 0.875rem 1rem;
        color: #a3a3a3;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        cursor: pointer;
        margin-bottom: 0.5rem;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }
    
    .sidebar-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fafafa;
    }
    
    .sidebar-item.active {
        background: linear-gradient(135deg, hsl(24, 95%, 53%) 0%, hsl(30, 100%, 45%) 100%);
        color: #0a0a0a;
    }
    
    .sidebar-item svg {
        width: 16px;
        height: 16px;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    /* Top Navigation */
    .top-nav {
        position: fixed;
        top: 0;
        right: 0;
        left: 280px;
        height: 70px;
        background: rgba(15, 15, 15, 0.6);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        z-index: 30;
        transition: left 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.5rem;
    }
    
    @media (max-width: 1024px) {
        .top-nav {
            left: 0;
        }
    }
    
    
    /* Main Content */
    .main-content {
        flex: 1;
        margin-left: 280px;
        margin-top: 70px;
        padding: 2rem;
        transition: margin-left 0.3s ease;
    }
    
    @media (max-width: 1024px) {
        .main-content {
            margin-left: 0;
        }
    }
    
    
    /* Mobile Overlay */
    .sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 35;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }
    
    @media (min-width: 1025px) {
        .sidebar-overlay {
            display: none !important;
        }
    }
    
    .sidebar-overlay.active {
        opacity: 1;
        pointer-events: auto;
    }
    
    /* Notification Dropdown */
    .notification-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 0.5rem;
        width: 320px;
        max-height: 400px;
        overflow-y: auto;
        background: rgba(15, 15, 15, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        opacity: 0;
        pointer-events: none;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }
    
    .notification-dropdown.active {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
    }
    
    .notification-item {
        padding: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: background 0.3s ease;
        cursor: pointer;
    }
    
    .notification-item:hover {
        background: rgba(255, 255, 255, 0.05);
    }
    
    .notification-item:last-child {
        border-bottom: none;
    }
    
    .notification-item.unread {
        background: rgba(255, 100, 30, 0.05);
    }
    
    /* User Dropdown */
    .user-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 0.5rem;
        width: 240px;
        background: rgba(15, 15, 15, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        opacity: 0;
        pointer-events: none;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }
    
    .user-dropdown.active {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0);
    }
    
    .user-dropdown-item {
        padding: 0.875rem 1rem;
        display: flex;
        align-items: center;
        color: #a3a3a3;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .user-dropdown-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fafafa;
    }
    
    .user-dropdown-item svg {
        width: 16px;
        height: 16px;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    .user-dropdown-divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.1);
        margin: 0.5rem 0;
    }
    
    /* Notification Badge */
    .notification-badge {
        position: absolute;
        top: -4px;
        right: -4px;
        width: 18px;
        height: 18px;
        background: #ef4444;
        color: white;
        border-radius: 50%;
        font-size: 10px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Mobile Close Button */
    .sidebar-close {
        display: none;
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        width: 2rem;
        height: 2rem;
        border-radius: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .sidebar-close:hover {
        background: rgba(255, 255, 255, 0.2);
    }
    
    @media (max-width: 1024px) {
        .sidebar-close {
            display: flex;
        }
    }
    
    /* Hide Scrollbars */
    .sidebar::-webkit-scrollbar,
    .notification-dropdown::-webkit-scrollbar,
    .dashboard-wrapper::-webkit-scrollbar,
    *::-webkit-scrollbar {
        width: 0px;
        height: 0px;
        display: none;
    }
    
    .sidebar::-webkit-scrollbar-track,
    .notification-dropdown::-webkit-scrollbar-track,
    .dashboard-wrapper::-webkit-scrollbar-track {
        display: none;
    }
    
    .sidebar::-webkit-scrollbar-thumb,
    .notification-dropdown::-webkit-scrollbar-thumb,
    .dashboard-wrapper::-webkit-scrollbar-thumb {
        display: none;
    }
    
    /* Firefox scrollbar hide */
    .sidebar,
    .notification-dropdown,
    .dashboard-wrapper,
    * {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
</style>

<!-- Dashboard Wrapper -->
<div class="dashboard-wrapper" x-cloak x-data="dashboard()">
    
    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay" :class="{ 'active': sidebarOpen }" @click="sidebarOpen = false"></div>
    
    <!-- Sidebar -->
    <aside class="sidebar" :class="{ 'open': sidebarOpen }">
        <!-- Logo -->
        <div class="sidebar-logo">
            <div class="flex items-center justify-between">
                <a href="/dashboard" class="text-2xl font-display font-bold">
                    <span class="text-gradient">TECH</span><span class="text-white">TOWER</span>
                </a>
                <!-- Mobile Close Button -->
                <button class="sidebar-close" @click="sidebarOpen = false">
                    <x-lucide-x class="w-4 h-4" />
                </button>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="sidebar-nav">
            <a href="/dashboard" class="sidebar-item active" @click="setActive('dashboard')">
                <x-lucide-layout-dashboard class="w-4 h-4" />
                <span>Dashboard</span>
            </a>
            
            <a href="/dashboard/services" class="sidebar-item" @click="setActive('services')">
                <x-lucide-briefcase class="w-4 h-4" />
                <span>Services</span>
            </a>
            
            <a href="/dashboard/projects" class="sidebar-item" @click="setActive('projects')">
                <x-lucide-folder class="w-4 h-4" />
                <span>Projects</span>
            </a>
            
            <a href="/dashboard/products" class="sidebar-item" @click="setActive('products')">
                <x-lucide-shopping-bag class="w-4 h-4" />
                <span>Products</span>
            </a>
            
            <a href="/dashboard/orders" class="sidebar-item" @click="setActive('orders')">
                <x-lucide-shopping-cart class="w-4 h-4" />
                <span>Orders</span>
            </a>
            
            <a href="/dashboard/customers" class="sidebar-item" @click="setActive('customers')">
                <x-lucide-users class="w-4 h-4" />
                <span>Customers</span>
            </a>
            
            <a href="/dashboard/analytics" class="sidebar-item" @click="setActive('analytics')">
                <x-lucide-bar-chart-3 class="w-4 h-4" />
                <span>Analytics</span>
            </a>
            
            <a href="/dashboard/messages" class="sidebar-item" @click="setActive('messages')">
                <x-lucide-message-square class="w-4 h-4" />
                <span>Messages</span>
            </a>
            
            <div class="my-4 border-t border-white/10"></div>
            
            <a href="/dashboard/settings" class="sidebar-item" @click="setActive('settings')">
                <x-lucide-settings class="w-4 h-4" />
                <span>Settings</span>
            </a>
            
            <a href="/dashboard/help" class="sidebar-item" @click="setActive('help')">
                <x-lucide-help-circle class="w-4 h-4" />
                <span>Help & Support</span>
            </a>
        </nav>
    </aside>
    
    <!-- Top Navigation -->
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
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=ff641e&color=fff" alt="User" class="w-8 h-8 rounded-full">
                    <div class="hidden sm:block text-left">
                        <div class="text-sm font-display font-bold">John Doe</div>
                        <div class="text-xs text-gray-400">Administrator</div>
                    </div>
                    <x-lucide-chevron-down class="w-4 h-4 text-gray-400" />
                </button>
                
                <!-- User Dropdown -->
                <div class="user-dropdown" :class="{ 'active': userMenuOpen }">
                    <div class="p-4 border-b border-white/10">
                        <div class="flex items-center space-x-3">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=ff641e&color=fff" alt="User" class="w-12 h-12 rounded-full">
                            <div>
                                <div class="font-display font-bold">John Doe</div>
                                <div class="text-xs text-gray-400">john@techtower.com</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-2">
                        <a href="/dashboard/profile" class="user-dropdown-item rounded-lg">
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
    
    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Your dashboard content goes here -->
        <div class="mb-8">
            <h1 class="text-3xl font-display font-bold mb-2">Welcome back, <span class="text-gradient">John!</span></h1>
            <p class="text-gray-400">Here's what's happening with your projects today.</p>
        </div>
        
        <!-- Example Stats Cards -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-[--primary]/20 flex items-center justify-center">
                        <x-lucide-briefcase class="w-4 h-4 text-[--primary]" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+12%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">156</div>
                <div class="text-sm text-gray-400">Active Projects</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                        <x-lucide-users class="w-4 h-4 text-blue-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+8%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">2,543</div>
                <div class="text-sm text-gray-400">Total Clients</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center">
                        <x-lucide-dollar-sign class="w-4 h-4 text-green-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+23%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">$45.2K</div>
                <div class="text-sm text-gray-400">Revenue</div>
            </div>
            
            <div class="glass rounded-2xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center">
                        <x-lucide-trending-up class="w-4 h-4 text-purple-400" />
                    </div>
                    <span class="text-xs text-green-400 font-display">+5%</span>
                </div>
                <div class="text-2xl font-display font-bold mb-1">89%</div>
                <div class="text-sm text-gray-400">Success Rate</div>
            </div>
        </div>
        
        <!-- Placeholder for more content -->
        <div class="glass rounded-2xl p-8 text-center">
            <x-lucide-layout class="w-4 h-4 text-gray-600 mx-auto mb-4" />
            <h3 class="text-xl font-display font-bold mb-2">Your Content Here</h3>
            <p class="text-gray-400">This is the main content area. Add your dashboard widgets, charts, and data here.</p>
        </div>
    </main>
</div>

<script>
    // Dashboard Alpine.js Component
    function dashboard() {
        return {
            sidebarOpen: window.innerWidth >= 1024,
            notificationOpen: false,
            userMenuOpen: false,
            notificationCount: 2,
            activeMenu: 'dashboard',
            
            init() {
                // Set sidebar state based on screen size
                this.sidebarOpen = window.innerWidth >= 1024;
                
                // Handle window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 1024) {
                        // Always open on desktop
                        this.sidebarOpen = true;
                    } else {
                        // Closed by default on mobile
                        this.sidebarOpen = false;
                    }
                });
            },
            
            toggleSidebar() {
                // Only toggle on mobile (desktop sidebar is always visible)
                if (window.innerWidth < 1024) {
                    this.sidebarOpen = !this.sidebarOpen;
                }
            },
            
            handleNotificationClick() {
                // On mobile, close sidebar before opening notification dropdown
                if (window.innerWidth < 1024 && this.sidebarOpen) {
                    this.sidebarOpen = false;
                    // Small delay to ensure sidebar closes first
                    setTimeout(() => {
                        this.notificationOpen = !this.notificationOpen;
                    }, 100);
                } else {
                    this.notificationOpen = !this.notificationOpen;
                }
            },
            
            handleUserMenuClick() {
                // On mobile, close sidebar before opening user menu dropdown
                if (window.innerWidth < 1024 && this.sidebarOpen) {
                    this.sidebarOpen = false;
                    // Small delay to ensure sidebar closes first
                    setTimeout(() => {
                        this.userMenuOpen = !this.userMenuOpen;
                    }, 100);
                } else {
                    this.userMenuOpen = !this.userMenuOpen;
                }
            },
            
            setActive(menu) {
                this.activeMenu = menu;
                // On mobile, close sidebar after navigation
                if (window.innerWidth < 1024) {
                    this.sidebarOpen = false;
                }
            }
        }
    }
</script>
</x-app-layout>
