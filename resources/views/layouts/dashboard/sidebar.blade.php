 <div class="sidebar-overlay" :class="{ 'active': sidebarOpen }" @click="sidebarOpen = false"></div>
    
    <!-- Sidebar -->
    <aside class="sidebar" :class="{ 'open': sidebarOpen }">
        <!-- Logo -->
        <div class="sidebar-logo">
            <div class="flex items-center justify-between">
                <x-logo/>

                <!-- Mobile Close Button -->
                {{-- <button class="sidebar-close" @click="sidebarOpen = false">
                    <x-lucide-x class="w-4 h-4" />
                </button> --}}
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="sidebar-nav">
            <a href="{{ route('dashboard') }}" class="sidebar-item active" @click="setActive('dashboard')">
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
            
            <a href="{{ route('profile.edit') }}" class="sidebar-item" @click="setActive('profile')">
                <x-lucide-settings class="w-4 h-4" />
                <span>Settings</span>
            </a>
            
            <a href="/dashboard/help" class="sidebar-item" @click="setActive('help')">
                <x-lucide-help-circle class="w-4 h-4" />
                <span>Help & Support</span>
            </a>
        </nav>
    </aside>